<?php

use App\Enums\AnimalStatus;
use App\Enums\AgeGroup;
use App\Enums\Sex;
use App\Enums\Size;
use App\Enums\Species;
use App\Models\Animal;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{
    public ?string $selectedSearch = null;

    public array $animals = [];

    public int $totalAvailableAnimals = 0;

    public int $visibleAnimals = 6;

    public ?string $selectedSpecies = null;

    public ?string $selectedSex = null;

    /** @var array<int, string> */
    public array $selectedAgeGroups = [];

    public ?string $selectedSize = null;

    public ?string $selectedCity = null;

    public string $sort = 'recent';

    public function mount(): void
    {
        $this->selectedSearch = request()->query('q') ?: request()->query('search');
        $this->selectedSpecies = request()->query('species');
        $this->selectedSize = request()->query('size');
        $this->selectedCity = request()->query('city');

        $age = request()->query('age');
        $this->selectedAgeGroups = $age ? [(string) $age] : [];

        $this->loadAnimals();
    }

    public function loadMore(): void
    {
        $this->visibleAnimals += 6;
        $this->loadAnimals();
    }

    #[On('species-filter-changed')]
    public function filterBySpecies(?string $species): void
    {
        $this->selectedSpecies = $species;
        $this->visibleAnimals = 6;
        $this->loadAnimals();
    }

    #[On('catalog-filters-changed')]
    public function applyFilters(array $filters): void
    {
        $this->selectedSearch = $filters['search'] ?? null;
        $this->selectedSpecies = $filters['species'] ?? null;
        $this->selectedSex = $filters['sex'] ?? null;
        $this->selectedAgeGroups = $filters['age_groups'] ?? [];
        $this->selectedSize = $filters['size'] ?? null;
        $this->selectedCity = $filters['city'] ?? null;
        $this->visibleAnimals = 6;
        $this->loadAnimals();
    }

    #[On('catalog-sort-changed')]
    public function applySort(string $sort): void
    {
        $this->sort = $sort;
        $this->visibleAnimals = 6;
        $this->loadAnimals();
    }

    private function loadAnimals(): void
    {
        $query = Animal::query()
            ->where('status', AnimalStatus::AVAILABLE)
            ->with('primaryImage');

        match ($this->sort) {
            'oldest' => $query->oldest('id'),
            'name' => $query->orderBy('name'),
            default => $query->latest('id'),
        };

        if ($this->selectedSpecies !== null) {
            $query->where('species', Species::from($this->selectedSpecies));
        }

        if ($this->selectedSearch !== null && $this->selectedSearch !== '') {
            $search = trim($this->selectedSearch);

            $query->where(function ($query) use ($search): void {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('city', 'like', "%{$search}%");
            });
        }

        if ($this->selectedSex !== null) {
            $query->where('sex', Sex::from($this->selectedSex));
        }

        if ($this->selectedAgeGroups !== []) {
            $query->whereIn('age_group', array_map(
                fn (string $ageGroup): AgeGroup => AgeGroup::from($ageGroup),
                $this->selectedAgeGroups,
            ));
        }

        if ($this->selectedSize !== null) {
            $query->where('size', Size::from($this->selectedSize));
        }

        if ($this->selectedCity !== null) {
            $query->where('city', $this->selectedCity);
        }

        $this->totalAvailableAnimals = (clone $query)->count();
        $this->dispatch('catalog-count-updated', count: $this->totalAvailableAnimals);
        $this->animals = $query
            ->limit($this->visibleAnimals)
            ->get()
            ->map(fn (Animal $animal): array => [
                'url' => route('animal', ['animalId' => $animal->id]),
                'name' => $animal->name,
                'age' => $animal->age_group->label(),
                'size' => 'Porte '.$animal->size->label(),
                'location' => $animal->city,
                'description' => $animal->description,
                'image' => $animal->primaryImage?->path ? Storage::url($animal->primaryImage->path) : '',
                'status' => $animal->status->label(),
                'gender' => $animal->sex->label(),
                'genderColor' => $animal->sex->value === 'female' ? 'white-red' : 'white-green',
            ])
            ->all();
    }
};
?>

<div class="min-w-0">
    <div class="mb-4 flex flex-wrap items-end justify-between gap-3">
        <div>
            <p class="text-[10px] font-bold uppercase tracking-[0.16em] text-[#b63817]">Catálogo de adoção</p>
            <h2 id="available-animals-title" class="mt-1 font-serif text-2xl font-bold text-[#261714] sm:text-3xl">Animais esperando por você</h2>
        </div>
        <p class="text-xs text-[#704f45]"><strong class="text-[#261714]">{{ $totalAvailableAnimals }}</strong> pets encontrados</p>
    </div>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3">
        @foreach ($animals as $animal)
            @component('components.animal-card', $animal)
            @endcomponent
        @endforeach
    </div>

    @if (count($animals) < $totalAvailableAnimals)
        <div class="mt-8 flex justify-center">
            <button type="button" wire:click="loadMore" wire:loading.attr="disabled" class="rounded-full border border-[#e7cfc5] bg-white px-5 py-2.5 text-xs font-semibold text-[#b63817] transition hover:bg-[#fff0eb] disabled:cursor-wait disabled:opacity-60">
                <span wire:loading.remove wire:target="loadMore">Carregar mais animais</span>
                <span wire:loading wire:target="loadMore">Carregando...</span>
            </button>
        </div>
    @endif
</div>
