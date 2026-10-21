<?php

use App\Enums\AgeGroup;
use App\Enums\Sex;
use App\Enums\Size;
use App\Enums\Species;
use App\Models\Animal;
use Livewire\Livewire;

it('shows six available animals and their total count', function (): void {
    Animal::factory()->count(8)->create();
    Animal::factory()->count(2)->unavailable()->create();

    Livewire::test('catalog.list-animals')
        ->assertSet('totalAvailableAnimals', 8)
        ->assertCount('animals', 6)
        ->assertSeeText('8 pets encontrados')
        ->assertDontSeeText('Adotado');
});

it('loads six more available animals at a time', function (): void {
    Animal::factory()->count(13)->create();

    Livewire::test('catalog.list-animals')
        ->assertCount('animals', 6)
        ->call('loadMore')
        ->assertSet('visibleAnimals', 12)
        ->assertCount('animals', 12)
        ->call('loadMore')
        ->assertSet('visibleAnimals', 18)
        ->assertCount('animals', 13);
});

it('filters available animals by species and resets the visible page', function (): void {
    Animal::factory()->count(7)->create(['species' => Species::DOG]);
    Animal::factory()->count(3)->create(['species' => Species::CAT]);

    Livewire::test('catalog.list-animals')
        ->call('loadMore')
        ->call('filterBySpecies', Species::CAT->value)
        ->assertSet('selectedSpecies', Species::CAT->value)
        ->assertSet('visibleAnimals', 6)
        ->assertCount('animals', 3)
        ->call('filterBySpecies', null)
        ->assertSet('selectedSpecies', null)
        ->assertSet('visibleAnimals', 6)
        ->assertCount('animals', 6);
});

it('counts available animals in the quick filters', function (): void {
    Animal::factory()->count(4)->create(['species' => Species::DOG]);
    Animal::factory()->count(2)->create(['species' => Species::CAT]);
    Animal::factory()->count(3)->unavailable()->create(['species' => Species::DOG]);

    Livewire::test('catalog.quick-filters')
        ->assertSet('totalAvailableAnimals', 6)
        ->assertSet('availableDogs', 4)
        ->assertSet('availableCats', 2);
});

it('applies all sidebar filters and resets them', function (): void {
    Animal::factory()->create([
        'name' => 'Filtered pet',
        'species' => Species::DOG,
        'sex' => Sex::FEMALE,
        'age_group' => AgeGroup::YOUNG,
        'size' => Size::SMALL,
        'city' => 'Campinas',
    ]);
    Animal::factory()->create(['name' => 'Other pet', 'city' => 'São Paulo']);

    Livewire::test('catalog.list-animals')
        ->call('applyFilters', [
            'species' => Species::DOG->value,
            'sex' => Sex::FEMALE->value,
            'age_groups' => [AgeGroup::YOUNG->value],
            'size' => Size::SMALL->value,
            'city' => 'Campinas',
        ])
        ->assertSet('totalAvailableAnimals', 1)
        ->assertCount('animals', 1)
        ->assertSeeText('Filtered pet')
        ->call('applyFilters', [])
        ->assertSet('selectedSpecies', null)
        ->assertSet('selectedSex', null)
        ->assertSet('selectedAgeGroups', [])
        ->assertSet('selectedSize', null)
        ->assertSet('selectedCity', null)
        ->assertCount('animals', 2);
});

it('loads unique city options in the sidebar filters', function (): void {
    Animal::factory()->create(['city' => 'Campinas']);
    Animal::factory()->create(['city' => 'Campinas']);
    Animal::factory()->create(['city' => 'São Paulo']);

    Livewire::test('catalog.filters')
        ->assertSet('cities', ['Campinas', 'São Paulo']);
});

it('sorts animals and exposes active filters in the manager', function (): void {
    Animal::factory()->create(['name' => 'Zelda']);
    Animal::factory()->create(['name' => 'Amora']);

    Livewire::test('catalog.list-animals')
        ->call('applySort', 'name')
        ->assertSet('sort', 'name')
        ->assertSet('animals.0.name', 'Amora')
        ->assertSet('animals.1.name', 'Zelda');

    Livewire::test('catalog.manager-filters')
        ->dispatch('catalog-filters-changed', filters: [
            'species' => Species::DOG->value,
            'sex' => Sex::FEMALE->value,
            'age_groups' => [AgeGroup::YOUNG->value],
            'size' => Size::SMALL->value,
            'city' => 'Campinas',
        ])
        ->assertSet('species', Species::DOG->value)
        ->assertSet('sex', Sex::FEMALE->value)
        ->assertSet('ageGroups', [AgeGroup::YOUNG->value])
        ->assertSet('size', Size::SMALL->value)
        ->assertSet('city', 'Campinas');
});

it('synchronizes filter controls when filters are changed elsewhere', function (): void {
    Livewire::test('catalog.filters')
        ->dispatch('catalog-filters-changed', filters: [
            'species' => Species::CAT->value,
            'sex' => Sex::MALE->value,
            'age_groups' => [AgeGroup::ADULT->value],
            'size' => Size::BIG->value,
            'city' => 'Campinas',
        ])
        ->assertSet('species', Species::CAT->value)
        ->assertSet('sex', Sex::MALE->value)
        ->assertSet('ageGroups', [AgeGroup::ADULT->value])
        ->assertSet('size', Size::BIG->value)
        ->assertSet('city', 'Campinas')
        ->dispatch('catalog-filters-changed', filters: [])
        ->assertSet('species', '')
        ->assertSet('sex', '')
        ->assertSet('ageGroups', [])
        ->assertSet('size', '')
        ->assertSet('city', '');

    Livewire::test('catalog.quick-filters')
        ->dispatch('catalog-filters-changed', filters: ['species' => Species::DOG->value])
        ->assertSet('selectedSpecies', Species::DOG->value)
        ->dispatch('catalog-filters-changed', filters: [])
        ->assertSet('selectedSpecies', null);
});
