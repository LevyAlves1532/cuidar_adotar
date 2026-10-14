<?php

namespace App\Filament\Caregiver\Resources\Animals\Pages;

use App\Filament\Caregiver\Resources\Animals\AnimalResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAnimal extends ViewRecord
{
    protected static string $resource = AnimalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
