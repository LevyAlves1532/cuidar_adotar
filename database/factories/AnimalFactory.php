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
            'user_id' => User::factory(),
            'name' => fake()->firstName(),
            'species' => Species::DOG,
            'sex' => Sex::FEMALE,
            'age_group' => AgeGroup::ADULT,
            'size' => Size::MEDIUM,
            'city' => fake()->city(),
            'description' => fake()->sentence(),
            'status' => AnimalStatus::AVAILABLE,
        ];
    }

    public function unavailable(): static
    {
        return $this->state(fn (): array => [
            'status' => AnimalStatus::ADOPTED,
        ]);
    }
}
