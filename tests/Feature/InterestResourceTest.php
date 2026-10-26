<?php

use App\Filament\Caregiver\Resources\Interests\InterestResource;
use App\Models\Animal;
use App\Models\Interest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

it('lists only interests for animals owned by the authenticated caregiver', function (): void {
    $caregiver = User::factory()->create();
    $otherCaregiver = User::factory()->create();
    $caregiverAnimal = Animal::factory()->create(['user_id' => $caregiver->id]);
    $otherAnimal = Animal::factory()->create(['user_id' => $otherCaregiver->id]);
    $visibleInterest = Interest::create([
        'animal_id' => $caregiverAnimal->id,
        'name' => 'Ana Souza',
        'email' => 'ana@example.com',
        'phone' => '11999999999',
        'message' => 'Quero adotar.',
    ]);
    $hiddenInterest = Interest::create([
        'animal_id' => $otherAnimal->id,
        'name' => 'Bruno Lima',
        'email' => 'bruno@example.com',
        'phone' => '11988888888',
        'message' => 'Tenho interesse.',
    ]);

    Auth::login($caregiver);

    expect(InterestResource::getEloquentQuery()->pluck('id')->all())
        ->toBe([$visibleInterest->id])
        ->not->toContain($hiddenInterest->id);
});
