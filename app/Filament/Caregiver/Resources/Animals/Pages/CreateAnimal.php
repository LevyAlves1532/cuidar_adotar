<?php

namespace App\Filament\Caregiver\Resources\Animals\Pages;

use App\Filament\Caregiver\Resources\Animals\AnimalResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateAnimal extends CreateRecord
{
    protected static string $resource = AnimalResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::id();

        return $data;
    }
}
