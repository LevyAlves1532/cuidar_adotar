<?php

use App\Models\Animal;
use App\Models\AnimalImage;
use App\Models\Interest;
use Livewire\Livewire;

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

it('validates and stores an adoption interest for the animal', function (): void {
    $animal = Animal::factory()->create();

    Livewire::test('animal.form-interest-animal', ['animal' => $animal])
        ->set('name', 'Ana Souza')
        ->set('email', 'ana@example.com')
        ->set('phone', '(11) 99999-9999')
        ->set('motivation', 'Quero oferecer um lar responsável.')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('submitted', true);

    expect(Interest::query()->where('animal_id', $animal->id)->first())
        ->not->toBeNull()
        ->name->toBe('Ana Souza')
        ->email->toBe('ana@example.com')
        ->phone->toBe('11999999999')
        ->message->toBe('Quero oferecer um lar responsável.');
});

it('rejects invalid adoption interest data', function (): void {
    $animal = Animal::factory()->create();

    Livewire::test('animal.form-interest-animal', ['animal' => $animal])
        ->set('name', 'A')
        ->set('email', 'invalid-email')
        ->set('phone', 'abc')
        ->set('motivation', 'curta')
        ->call('submit')
        ->assertHasErrors(['name', 'email', 'phone', 'motivation']);

    expect(Interest::count())->toBe(0);
});
