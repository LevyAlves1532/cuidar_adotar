<?php

use App\Models\Animal;
use App\Models\AnimalImage;

it('shows an available animal by its id', function (): void {
    $animal = Animal::factory()->create([
        'name' => 'Bidu',
        'city' => 'Campinas',
        'description' => 'Bidu gosta de brincar.',
    ]);

    AnimalImage::create([
        'animal_id' => $animal->id,
        'path' => 'animals/bidu.jpg',
        'is_primary' => true,
    ]);

    $this->get(route('animal', ['animalId' => $animal->id]))
        ->assertOk()
        ->assertSeeText('Bidu')
        ->assertSeeText('Campinas')
        ->assertSeeText('Bidu gosta de brincar.')
        ->assertSee('animals/bidu.jpg');
});

it('does not show unavailable animals in the public detail page', function (): void {
    $animal = Animal::factory()->unavailable()->create();

    $this->get(route('animal', ['animalId' => $animal->id]))
        ->assertNotFound();
});
