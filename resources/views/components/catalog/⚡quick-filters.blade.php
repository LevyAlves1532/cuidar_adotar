<?php

use App\Enums\AnimalStatus;
use App\Enums\Species;
use App\Models\Animal;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component
{
    public ?string $selectedSpecies = null;

    public int $totalAvailableAnimals = 0;

    public int $availableDogs = 0;

    public int $availableCats = 0;

    public function mount(): void
    {
        $this->selectedSpecies = request()->query('species');

        $availableAnimals = Animal::query()->where('status', AnimalStatus::AVAILABLE);

        $this->totalAvailableAnimals = (clone $availableAnimals)->count();
        $this->availableDogs = (clone $availableAnimals)->where('species', Species::DOG)->count();
        $this->availableCats = (clone $availableAnimals)->where('species', Species::CAT)->count();
    }

    public function selectSpecies(?string $species): void
    {
        $this->selectedSpecies = $species;
        $this->dispatch('catalog-filters-changed', filters: [
            'species' => $species,
            'sex' => null,
            'age_groups' => [],
            'size' => null,
            'city' => null,
        ]);
    }

    #[On('catalog-filters-changed')]
    public function syncFilters(array $filters): void
    {
        $this->selectedSpecies = $filters['species'] ?? null;
    }
};
?>

<nav class="mt-7 -mx-5 flex gap-2 overflow-x-auto px-5 pb-1 scrollbar-none sm:-mx-8 sm:px-8 lg:-mx-10 lg:px-10" aria-label="Categorias do catálogo">
    @component('components.selection-button', [
        'label' => 'Todos os Pets',
        'count' => $totalAvailableAnimals,
        'active' => $selectedSpecies === null,
        'tag' => 'button',
        'action' => 'selectSpecies(null)',
    ])
        @slot('icon')
            <svg class="w-3.5 h-3.5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M104 112C90.7 112 80 122.7 80 136L80 184C80 197.3 90.7 208 104 208L152 208C165.3 208 176 197.3 176 184L176 136C176 122.7 165.3 112 152 112L104 112zM256 128C238.3 128 224 142.3 224 160C224 177.7 238.3 192 256 192L544 192C561.7 192 576 177.7 576 160C576 142.3 561.7 128 544 128L256 128zM256 288C238.3 288 224 302.3 224 320C224 337.7 238.3 352 256 352L544 352C561.7 352 576 337.7 576 320C576 302.3 561.7 288 544 288L256 288zM256 448C238.3 448 224 462.3 224 480C224 497.7 238.3 512 256 512L544 512C561.7 512 576 497.7 576 480C576 462.3 561.7 448 544 448L256 448zM80 296L80 344C80 357.3 90.7 368 104 368L152 368C165.3 368 176 357.3 176 344L176 296C176 282.7 165.3 272 152 272L104 272C90.7 272 80 282.7 80 296zM104 432C90.7 432 80 442.7 80 456L80 504C80 517.3 90.7 528 104 528L152 528C165.3 528 176 517.3 176 504L176 456C176 442.7 165.3 432 152 432L104 432z"/></svg>
        @endslot
    @endcomponent

    @component('components.selection-button', [
        'label' => 'Cães',
        'count' => $availableDogs,
        'active' => $selectedSpecies === Species::DOG->value,
        'tag' => 'button',
        'color' => 'green',
        'action' => "selectSpecies('dog')",
    ])
        @slot('icon') 🐶 @endslot
    @endcomponent
    @component('components.selection-button', [
        'label' => 'Gatos',
        'count' => $availableCats,
        'active' => $selectedSpecies === Species::CAT->value,
        'tag' => 'button',
        'color' => 'yellow',
        'action' => "selectSpecies('cat')",
    ])
        @slot('icon') 🐱 @endslot
    @endcomponent
</nav>
