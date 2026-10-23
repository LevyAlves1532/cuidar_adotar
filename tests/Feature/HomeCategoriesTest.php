<?php

use App\Enums\AgeGroup;
use App\Enums\Sex;
use App\Enums\Size;
use App\Enums\Species;
use App\Models\Animal;

it('shows available animal totals for each home category', function (): void {
    Animal::factory()->count(2)->create(['species' => Species::DOG]);
    Animal::factory()->create(['species' => Species::CAT]);
    Animal::factory()->create(['age_group' => AgeGroup::CUB]);
    Animal::factory()->create([
        'name' => 'Senior big dog',
        'species' => Species::DOG,
        'sex' => Sex::MALE,
        'age_group' => AgeGroup::ELDERLY,
        'size' => Size::BIG,
        'city' => 'Campinas',
        'description' => 'Available senior dog',
    ]);
    Animal::factory()->unavailable()->create(['species' => Species::DOG]);

    $response = $this->get(route('home'));

    $response
        ->assertSuccessful()
        ->assertSee('href="'.route('catalog', ['species' => Species::DOG->value]).'"', false)
        ->assertSee('4 disponíveis')
        ->assertSee('href="'.route('catalog', ['age' => AgeGroup::ELDERLY->value]).'"', false)
        ->assertSee('1 disponíveis');
});

it('shows unique available cities in the home animal filter', function (): void {
    Animal::factory()->count(2)->create(['city' => 'Campinas']);
    Animal::factory()->create(['city' => 'São Paulo']);
    Animal::factory()->unavailable()->create(['city' => 'Curitiba']);

    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('<option value="">Todas as cidades</option>', false)
        ->assertSee('<option value="Campinas">Campinas</option>', false)
        ->assertSee('<option value="São Paulo">São Paulo</option>', false)
        ->assertDontSee('<option value="Curitiba">Curitiba</option>', false);
});
