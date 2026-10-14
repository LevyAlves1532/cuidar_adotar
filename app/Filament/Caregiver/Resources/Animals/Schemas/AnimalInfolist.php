<?php

namespace App\Filament\Caregiver\Resources\Animals\Schemas;

use App\Enums\AgeGroup;
use App\Enums\AnimalStatus;
use App\Enums\Sex;
use App\Enums\Size;
use App\Enums\Species;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AnimalInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informações do animal')
                    ->schema([
                        TextEntry::make('name')
                            ->label('Nome')
                            ->weight('bold'),
                        TextEntry::make('species')
                            ->label('Espécie')
                            ->formatStateUsing(fn (Species|string|null $state): ?string => $state instanceof Species ? $state->label() : $state),
                        TextEntry::make('sex')
                            ->label('Sexo')
                            ->formatStateUsing(fn (Sex|string|null $state): ?string => $state instanceof Sex ? $state->label() : $state),
                        TextEntry::make('age_group')
                            ->label('Faixa etária')
                            ->formatStateUsing(fn (AgeGroup|string|null $state): ?string => $state instanceof AgeGroup ? $state->label() : $state),
                        TextEntry::make('size')
                            ->label('Porte')
                            ->formatStateUsing(fn (Size|string|null $state): ?string => $state instanceof Size ? $state->label() : $state),
                        TextEntry::make('city')
                            ->label('Cidade'),
                        TextEntry::make('status')
                            ->label('Status')
                            ->badge()
                            ->color(fn (AnimalStatus|string|null $state): string => match ($state) {
                                AnimalStatus::AVAILABLE, 'available' => 'success',
                                AnimalStatus::IN_PROGRESS, 'in_progress' => 'warning',
                                AnimalStatus::ADOPTED, 'adopted' => 'gray',
                                default => 'gray',
                            })
                            ->formatStateUsing(fn (AnimalStatus|string|null $state): ?string => $state instanceof AnimalStatus ? $state->label() : $state),
                    ])
                    ->columns(2),

                Section::make('Descrição')
                    ->schema([
                        TextEntry::make('description')
                            ->label('')
                            ->html()
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
