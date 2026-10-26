<?php

namespace App\Filament\Caregiver\Resources\Interests;

use App\Filament\Caregiver\Resources\Interests\Pages\ListInterests;
use App\Filament\Caregiver\Resources\Interests\Pages\ViewInterest;
use App\Filament\Caregiver\Resources\Interests\Schemas\InterestForm;
use App\Filament\Caregiver\Resources\Interests\Schemas\InterestInfolist;
use App\Filament\Caregiver\Resources\Interests\Tables\InterestsTable;
use App\Models\Interest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class InterestResource extends Resource
{
    protected static ?string $model = Interest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $modelLabel = 'Interessado';

    protected static ?string $slug = 'interessados';

    public static function infolist(Schema $schema): Schema
    {
        return InterestInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InterestsTable::configure($table);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereHas('animal', fn (Builder $query): Builder => $query->where('user_id', Auth::id()));
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListInterests::route('/'),
            'view' => ViewInterest::route('/{record}'),
        ];
    }
}
