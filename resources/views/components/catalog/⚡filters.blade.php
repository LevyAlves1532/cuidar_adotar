<?php

use App\Enums\AgeGroup;
use App\Enums\Sex;
use App\Enums\Size;
use App\Enums\Species;
use App\Models\Animal;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{
    public string $species = '';

    public string $sex = '';

    /** @var array<int, string> */
    public array $ageGroups = [];

    public string $size = '';

    public string $city = '';

    /** @var array<int, string> */
    public array $cities = [];

    public function mount(): void
    {
        $this->cities = Animal::query()
            ->whereNotNull('city')
            ->where('city', '!=', '')
            ->distinct()
            ->orderBy('city')
            ->pluck('city')
            ->values()
            ->all();
    }

    public function applyFilters(): void
    {
        $this->dispatch('catalog-filters-changed', filters: [
            'species' => $this->species ?: null,
            'sex' => $this->sex ?: null,
            'age_groups' => $this->ageGroups,
            'size' => $this->size ?: null,
            'city' => $this->city ?: null,
        ]);
    }

    #[On('catalog-filters-changed')]
    public function syncFilters(array $filters): void
    {
        $this->species = $filters['species'] ?? '';
        $this->sex = $filters['sex'] ?? '';
        $this->ageGroups = $filters['age_groups'] ?? [];
        $this->size = $filters['size'] ?? '';
        $this->city = $filters['city'] ?? '';
    }

    public function resetFilters(): void
    {
        $this->reset(['species', 'sex', 'ageGroups', 'size', 'city']);
        $this->dispatch('catalog-filters-changed', filters: []);
    }
};
?>

<aside class="rounded-[1.75rem] border border-[#f2e5df] bg-white p-4 shadow-[0_8px_24px_rgba(104,56,38,0.06)] sm:p-5 lg:sticky lg:top-24 lg:h-fit" aria-labelledby="catalog-filter-title">
    <div class="flex items-center justify-between">
        <h2 id="catalog-filter-title" class="flex items-center gap-2 text-base font-bold text-[#261714]">
            <svg class="h-4 w-4 text-[#b63817]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M7 12h10M10 18h4" />
            </svg>
            Filtrar Adoção
        </h2>
        <button type="button" wire:click="resetFilters" class="text-xs font-medium text-[#8c6b60] transition hover:text-[#b63817]">Redefinir</button>
    </div>

    <form id="catalog-filter-form" wire:submit="applyFilters" class="mt-4 space-y-4">
        <div>
            @component('components.input', ['id' => 'catalog-search', 'name' => 'search', 'type' => 'search', 'label' => 'Busca Rápida', 'placeholder' => 'Nome', 'customClass' => 'catalog-sidebar-input', 'compact' => true, 'iconPosition' => 'right'])
                @slot('iconLeft')
                    <svg class="pointer-events-none absolute right-3 top-2.5 h-3.5 w-3.5 text-[#8c6b60]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="7" /><path stroke-linecap="round" d="m20 20-4-4" /></svg>
                @endslot
            @endcomponent
        </div>

        <fieldset>
            <legend class="mb-2 text-xs font-semibold text-[#261714]">Espécie</legend>
            <div class="grid grid-cols-3 gap-2">
                @foreach ([['Todos', '', '🐾'], ['Cães', Species::DOG->value, '🐕'], ['Gatos', Species::CAT->value, '🐈']] as [$label, $value, $icon])
                    <label class="group relative flex cursor-pointer flex-col items-center gap-1 rounded-sm bg-[#fff0eb] px-1 py-2 text-[9px] font-semibold text-[#704f45] transition hover:bg-[#fbe1d8] peer-checked:bg-[#b63817] peer-checked:text-white peer-checked:ring-2 peer-checked:ring-[#b63817]/20">
                        <input class="peer sr-only" type="radio" wire:model="species" value="{{ $value }}" @checked($species === $value) />
                        <span class="text-sm">{{ $icon }}</span>{{ $label }}
                        <span class="absolute right-1 top-1 hidden text-[10px] peer-checked:block" aria-hidden="true">✓</span>
                    </label>
                @endforeach
            </div>
        </fieldset>

        <fieldset>
            <legend class="mb-2 text-xs font-semibold text-[#261714]">Sexo</legend>
            <div class="flex flex-wrap gap-1.5">
                @foreach ([['Todos', ''], ['Macho ♂', Sex::MALE->value], ['Fêmea ♀', Sex::FEMALE->value]] as [$label, $value])
                    <label class="inline-flex min-h-8 cursor-pointer items-center justify-center gap-2 rounded-full border border-[#d9ebd3] bg-white px-3 py-1 text-xs font-medium text-[#4f7650] transition hover:border-[#6b9b61] peer-checked:border-[#6b9b61] peer-checked:bg-[#6b9b61] peer-checked:text-white peer-checked:ring-2 peer-checked:ring-[#6b9b61]/20">
                        <input type="radio" wire:model="sex" value="{{ $value }}" class="peer sr-only" @checked($sex === $value) />
                        {{ $label }}
                        <span class="hidden peer-checked:inline" aria-hidden="true">✓</span>
                    </label>
                @endforeach
            </div>
        </fieldset>

        <fieldset>
            <legend class="mb-2 text-xs font-semibold text-[#261714]">Faixa Etária</legend>
            <div class="space-y-2 text-xs text-[#704f45]">
                @foreach ([AgeGroup::CUB, AgeGroup::YOUNG, AgeGroup::ADULT, AgeGroup::ELDERLY] as $ageGroup)
                    <label class="flex cursor-pointer items-center gap-2"><input type="checkbox" wire:model="ageGroups" value="{{ $ageGroup->value }}" class="h-3.5 w-3.5 rounded border-[#cdb8af] accent-[#b63817]" /> <span class="flex-1">{{ $ageGroup->label() }}</span></label>
                @endforeach
            </div>
        </fieldset>

        <fieldset>
            <legend class="mb-2 text-xs font-semibold text-[#261714]">Porte do Animal</legend>
            <div class="grid grid-cols-2 gap-1.5">
                @foreach ([[Size::SMALL, 'Até 10 kg'], [Size::MEDIUM, '11 a 25 kg'], [Size::BIG, '26 a 40 kg']] as [$animalSize, $description])
                    <label class="relative cursor-pointer rounded-full bg-[#fff0eb] px-2 py-2 text-center text-[11px] text-[#704f45] transition hover:bg-[#fbe1d8] peer-checked:bg-[#b63817] peer-checked:text-white peer-checked:ring-2 peer-checked:ring-[#b63817]/20"><input class="peer sr-only" type="radio" wire:model="size" value="{{ $animalSize->value }}" @checked($size === $animalSize->value) /> <span class="block font-semibold">{{ $animalSize->label() }}</span><span class="text-[10px]">{{ $description }}</span><span class="absolute right-2 top-1 hidden peer-checked:block" aria-hidden="true">✓</span></label>
                @endforeach
            </div>
        </fieldset>

        <div>
            <label for="catalog-location" class="mb-1 block text-xs font-semibold text-[#261714]">Localização</label>
            <select id="catalog-location" wire:model="city" class="catalog-sidebar-select w-full rounded-full border border-[#eadfd9] bg-white px-3 py-2 text-xs text-[#704f45] focus:border-[#b63817] focus:outline-none focus:ring-2 focus:ring-[#b63817]/20">
                <option value="">Todas as cidades</option>
                @foreach ($cities as $availableCity)
                    <option value="{{ $availableCity }}">{{ $availableCity }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="flex h-11 w-full items-center justify-center gap-2 rounded-full bg-[#b63817] text-[11px] font-bold text-white shadow-sm transition hover:bg-[#922d12] focus:outline-none focus:ring-2 focus:ring-[#b63817] focus:ring-offset-2">
            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" /></svg>
            Aplicar Filtros
        </button>
    </form>
</aside>
