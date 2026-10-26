<?php

namespace App\Filament\Caregiver\Resources\Animals\RelationManagers;

use App\Filament\Caregiver\Resources\Animals\AnimalResource;
use App\Filament\Caregiver\Resources\Interests\InterestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class InterestsRelationManager extends RelationManager
{
    protected static string $relationship = 'interests';

    protected static ?string $relatedResource = InterestResource::class;

    public function table(Table $table): Table
    {
        return $table;
    }
}
