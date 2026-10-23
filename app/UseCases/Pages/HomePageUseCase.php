<?php

namespace App\UseCases\Pages;

use App\Repositories\IAnimalRepository;

class HomePageUseCase
{
    public function __construct(private readonly IAnimalRepository $animalRepository) {}

    public function execute(): array
    {
        return [
            'animals' => $this->animalRepository->getRecentAvailable(),
            'availableAnimalsCount' => $this->animalRepository->countAvailable(),
            'categoryCounts' => $this->animalRepository->countAvailableByCategories(),
            'availableCities' => $this->animalRepository->getAvailableCities(),
        ];
    }
}
