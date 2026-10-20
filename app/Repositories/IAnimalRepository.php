<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface IAnimalRepository
{
    public function getRecentAvailable(int $limit = 4): Collection;

    public function countAvailable(): int;
}
