<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface IAnimalRepository
{
    public function getRecentAvailable(int $limit = 4): Collection;

    public function countAvailable(): int;

    /**
     * @return array<string, int>
     */
    public function countAvailableByCategories(): array;

    /**
     * @return array<int, string>
     */
    public function getAvailableCities(): array;
}
