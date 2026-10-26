<?php

namespace App\Filament\Caregiver\Resources\Animals;

use App\Filament\Caregiver\Resources\Animals\Pages\CreateAnimal;
use App\Filament\Caregiver\Resources\Animals\Pages\EditAnimal;
use App\Filament\Caregiver\Resources\Animals\Pages\ListAnimals;
use App\Filament\Caregiver\Resources\Animals\Pages\ViewAnimal;
use App\Filament\Caregiver\Resources\Animals\RelationManagers\ImagesRelationManager;
use App\Filament\Caregiver\Resources\Animals\RelationManagers\InterestsRelationManager;
use App\Filament\Caregiver\Resources\Animals\Schemas\AnimalForm;
use App\Filament\Caregiver\Resources\Animals\Schemas\AnimalInfolist;
use App\Filament\Caregiver\Resources\Animals\Tables\AnimalsTable;
use App\Models\Animal;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class AnimalResource extends Resource
{
    protected static ?string $model = Animal::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBugAnt;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $modelLabel = 'Animal';

    protected static ?string $pluralLabel = 'Animais';

    protected static ?string $slug = 'animais';

    public static function form(Schema $schema): Schema
    {
        return AnimalForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AnimalInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnimalsTable::configure($table);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('user_id', Auth::id());
    }

    public static function getRelations(): array
    {
        return [
            ImagesRelationManager::class,
            InterestsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAnimals::route('/'),
            'create' => CreateAnimal::route('/criar'),
            'view' => ViewAnimal::route('/{record}'),
            'edit' => EditAnimal::route('/{record}/editar'),
        ];
    }
}
