<?php

namespace Database\Factories;

use App\Enums\AgeGroup;
use App\Enums\AnimalStatus;
use App\Enums\Sex;
use App\Enums\Size;
use App\Enums\Species;
use App\Models\Animal;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Animal>
 */
class AnimalFactory extends Factory
{
    protected $model = Animal::class;

    public function definition(): array
    {
        return [
            'user_id' => User::query()->inRandomOrder()->value('id') ?? User::factory(),
            'name' => fake()->firstName(),
            'species' => fake()->randomElement(Species::cases()),
            'sex' => fake()->randomElement(Sex::cases()),
            'age_group' => fake()->randomElement(AgeGroup::cases()),
            'size' => fake()->randomElement(Size::cases()),
            'city' => fake()->city(),
            'description' => fake()->sentence(),
            'status' => fake()->randomElement(AnimalStatus::cases()),
        ];
    }

    public function unavailable(): static
    {
        return $this->state(fn (): array => [
            'status' => AnimalStatus::ADOPTED,
        ]);
    }
}
