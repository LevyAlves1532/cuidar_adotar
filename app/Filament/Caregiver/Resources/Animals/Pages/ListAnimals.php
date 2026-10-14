<?php

namespace App\Filament\Caregiver\Resources\Animals\Pages;

use App\Filament\Caregiver\Resources\Animals\AnimalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnimals extends ListRecords
{
    protected static string $resource = AnimalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
