<?php

namespace App\Repositories;

use App\Enums\AgeGroup;
use App\Enums\AnimalStatus;
use App\Enums\Size;
use App\Enums\Species;
use App\Models\Animal;
use Illuminate\Support\Collection;

class AnimalRepository implements IAnimalRepository
{
    public function getRecentAvailable(int $limit = 4): Collection
    {
        return Animal::query()
            ->where('status', AnimalStatus::AVAILABLE)
            ->with('primaryImage')
            ->latest()
            ->limit($limit)
            ->get();
    }

    public function countAvailable(): int
    {
        return Animal::query()
            ->where('status', AnimalStatus::AVAILABLE)
            ->count();
    }

    public function countAvailableByCategories(): array
    {
        $availableAnimals = Animal::query()
            ->where('status', AnimalStatus::AVAILABLE);

        return [
            'dogs' => (clone $availableAnimals)->where('species', Species::DOG)->count(),
            'cats' => (clone $availableAnimals)->where('species', Species::CAT)->count(),
            'puppies' => (clone $availableAnimals)->where('age_group', AgeGroup::CUB)->count(),
            'seniors' => (clone $availableAnimals)->where('age_group', AgeGroup::ELDERLY)->count(),
            'bigDogs' => (clone $availableAnimals)
                ->where('species', Species::DOG)
                ->where('size', Size::BIG)
                ->count(),
        ];
    }

    public function getAvailableCities(): array
    {
        return Animal::query()
            ->where('status', AnimalStatus::AVAILABLE)
            ->whereNotNull('city')
            ->where('city', '!=', '')
            ->distinct()
            ->orderBy('city')
            ->pluck('city')
            ->values()
            ->all();
    }

    public function findAvailableById(int|string $animalId): Animal
    {
        return Animal::query()
            ->whereKey($animalId)
            ->where('status', AnimalStatus::AVAILABLE)
            ->with(['images', 'primaryImage', 'user'])
            ->firstOrFail();
    }
}
