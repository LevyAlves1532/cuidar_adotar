<?php

namespace App\Filament\Caregiver\Resources\Animals\Tables;

use App\Enums\AgeGroup;
use App\Enums\AnimalStatus;
use App\Enums\Sex;
use App\Enums\Size;
use App\Enums\Species;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class AnimalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->query(fn () => Auth::user()->animals())
            ->columns([
                TextColumn::make('name')
                    ->label('Nome')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('species')
                    ->label('Espécie')
                    ->formatStateUsing(fn (Species|string|null $state): ?string => $state instanceof Species ? $state->label() : $state)
                    ->sortable(),
                TextColumn::make('sex')
                    ->label('Sexo')
                    ->formatStateUsing(fn (Sex|string|null $state): ?string => $state instanceof Sex ? $state->label() : $state)
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('age_group')
                    ->label('Idade')
                    ->formatStateUsing(fn (AgeGroup|string|null $state): ?string => $state instanceof AgeGroup ? $state->label() : $state)
                    ->sortable(),
                TextColumn::make('size')
                    ->label('Porte')
                    ->formatStateUsing(fn (Size|string|null $state): ?string => $state instanceof Size ? $state->label() : $state)
                    ->sortable(),
                TextColumn::make('city')
                    ->label('Cidade')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn (AnimalStatus|string|null $state): ?string => $state instanceof AnimalStatus ? $state->label() : $state)
                    ->sortable(),
            ])
            ->searchPlaceholder('Pesquisar por nome ou cidade...')
            ->filters([
                SelectFilter::make('species')
                    ->label('Espécie')
                    ->options(collect(Species::cases())->mapWithKeys(
                        fn (Species $species): array => [$species->value => $species->label()],
                    )->all()),
                SelectFilter::make('size')
                    ->label('Porte')
                    ->options(collect(Size::cases())->mapWithKeys(
                        fn (Size $size): array => [$size->value => $size->label()],
                    )->all()),
                SelectFilter::make('age_group')
                    ->label('Idade')
                    ->options(collect(AgeGroup::cases())->mapWithKeys(
                        fn (AgeGroup $ageGroup): array => [$ageGroup->value => $ageGroup->label()],
                    )->all()),
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ])
                    ->label('Ações')
                    ->button(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
