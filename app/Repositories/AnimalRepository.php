<?php

namespace App\Repositories;

use App\Enums\AnimalStatus;
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
}
