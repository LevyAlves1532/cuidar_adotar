<?php

namespace App\UseCases\Pages;

use App\Repositories\IAnimalRepository;

class AnimalPageUseCase
{
    public function __construct(
        private readonly IAnimalRepository $animalRepository
    ) {}

    public function execute(string $animalId): array
    {
        return [
            'animal' => $this->animalRepository->findAvailableById($animalId),
        ];
    }
}
