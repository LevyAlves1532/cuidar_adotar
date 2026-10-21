<?php

use App\Enums\AgeGroup;
use App\Enums\Sex;
use App\Enums\Size;
use App\Enums\Species;
use App\Enums\AnimalStatus;
use App\Models\Animal;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{
    public ?string $species = null;

    public ?string $sex = null;

    /** @var array<int, string> */
    public array $ageGroups = [];

    public ?string $size = null;

    public ?string $city = null;

    public string $sort = 'recent';

    public int $totalAvailableAnimals = 0;

    public function mount(): void
    {
        $this->totalAvailableAnimals = Animal::query()
            ->where('status', AnimalStatus::AVAILABLE)
            ->count();
    }

    #[On('catalog-count-updated')]
    public function updateCount(int $count): void
    {
        $this->totalAvailableAnimals = $count;
    }

    #[On('catalog-filters-changed')]
    public function updateFilters(array $filters): void
    {
        $this->species = $filters['species'] ?? null;
        $this->sex = $filters['sex'] ?? null;
        $this->ageGroups = $filters['age_groups'] ?? [];
        $this->size = $filters['size'] ?? null;
        $this->city = $filters['city'] ?? null;
    }

    public function updatedSort(string $sort): void
    {
        $this->dispatch('catalog-sort-changed', sort: $sort);
    }

    public function removeFilter(string $filter): void
    {
        if ($filter === 'age_groups') {
            $this->ageGroups = [];
        } else {
            $this->{$filter} = null;
        }

        $this->dispatchCurrentFilters();
    }

    public function clearFilters(): void
    {
        $this->reset(['species', 'sex', 'ageGroups', 'size', 'city']);
        $this->dispatchCurrentFilters();
    }

    private function dispatchCurrentFilters(): void
    {
        $this->dispatch('catalog-filters-changed', filters: [
            'species' => $this->species,
            'sex' => $this->sex,
            'age_groups' => $this->ageGroups,
            'size' => $this->size,
            'city' => $this->city,
        ]);
    }
};
?>

<section class="mx-auto w-full max-w-7xl px-5 pb-2 sm:px-8 lg:px-10 mb-5" aria-labelledby="catalog-filters-title">
    <div class="rounded-[1.75rem] border border-[#f2e5df] bg-white p-3 shadow-[0_8px_24px_rgba(104,56,38,0.06)] sm:p-4">
        <div class="flex flex-col gap-3 lg:flex-row lg:items-center lg:justify-between">
            <div class="flex min-w-0 flex-1 flex-wrap items-center gap-2">
                <h2 id="catalog-filters-title" class="flex shrink-0 items-center gap-2 text-xs font-semibold text-[#704f45]">
                    <svg class="h-4 w-4 text-[#356442]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M7 12h10M10 18h4" />
                    </svg>
                    Filtros ativos:
                </h2>

                @if ($species !== null)
                    @component('components.tag', ['label' => Species::from($species)->label()])
                    @slot('iconRight')
                        <button type="button" wire:click="removeFilter('species')" class="rounded-full text-[#8c6b60] transition hover:text-[#b63817]" aria-label="Remover filtro espécie">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                            </svg>
                        </button>
                    @endslot
                    @endcomponent
                @endif

                @if ($size !== null)
                    @component('components.tag', ['label' => 'Porte '.Size::from($size)->label()])
                    @slot('iconRight')
                        <button type="button" wire:click="removeFilter('size')" class="rounded-full text-[#8c6b60] transition hover:text-[#b63817]" aria-label="Remover filtro porte">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                            </svg>
                        </button>
                    @endslot
                    @endcomponent
                @endif

                @if ($city !== null)
                    @component('components.tag', ['label' => $city])
                    @slot('iconRight')
                        <button type="button" wire:click="removeFilter('city')" class="rounded-full text-[#8c6b60] transition hover:text-[#b63817]" aria-label="Remover filtro cidade">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                            </svg>
                        </button>
                    @endslot
                    @endcomponent
                @endif

                @if ($sex !== null)
                    @component('components.tag', ['label' => Sex::from($sex)->label()])
                    @slot('iconRight')
                        <button type="button" wire:click="removeFilter('sex')" class="rounded-full text-[#8c6b60] transition hover:text-[#b63817]" aria-label="Remover filtro sexo">
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                            </svg>
                        </button>
                    @endslot
                    @endcomponent
                @endif

                @foreach ($ageGroups as $ageGroup)
                    @component('components.tag', ['label' => AgeGroup::from($ageGroup)->label()])
                        @slot('iconRight')
                            <button type="button" wire:click="removeFilter('age_groups')" class="rounded-full text-[#8c6b60] transition hover:text-[#b63817]" aria-label="Remover filtro de idade">
                                <span aria-hidden="true">×</span>
                            </button>
                        @endslot
                    @endcomponent
                @endforeach

                @if ($species !== null || $sex !== null || $ageGroups !== [] || $size !== null || $city !== null)
                    <button type="button" wire:click="clearFilters" class="px-1 text-[11px] font-medium text-[#b63817] underline-offset-2 transition hover:underline">Limpar tudo</button>
                @endif
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center lg:shrink-0">
                <p class="flex items-center gap-2 whitespace-nowrap text-xs text-[#704f45]">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#5f805f]" aria-hidden="true"></span>
                    <strong class="font-semibold text-[#3d2a24]">{{ $totalAvailableAnimals }}</strong> pets disponíveis
                </p>

                <div class="flex items-center gap-2">
                    <label for="catalog-sort" class="shrink-0 text-[11px] text-[#704f45]">Ordenar por:</label>
                    <select id="catalog-sort" wire:model.live="sort" class="h-9 min-w-36 rounded-full border border-[#f0ddd5] bg-[#fffaf7] px-3 text-xs text-[#3d2a24] outline-none transition focus:border-[#b63817] focus:ring-4 focus:ring-[#b63817]/10">
                        <option value="recent">Mais recentes</option>
                        <option value="oldest">Mais antigos</option>
                        <option value="name">Nome</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>
