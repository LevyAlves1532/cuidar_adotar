<?php

namespace App\Filament\Caregiver\Resources\Interests\Pages;

use App\Filament\Caregiver\Resources\Interests\InterestResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewInterest extends ViewRecord
{
    protected static string $resource = InterestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // EditAction::make(),
        ];
    }
}
