<?php

namespace App\Filament\Caregiver\Resources\Animals\Pages;

use App\Filament\Caregiver\Resources\Animals\AnimalResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAnimal extends EditRecord
{
    protected static string $resource = AnimalResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        unset($data['user_id']);

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
