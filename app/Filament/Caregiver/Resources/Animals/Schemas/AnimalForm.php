<?php

namespace App\Filament\Caregiver\Resources\Animals\Schemas;

use App\Enums\AgeGroup;
use App\Enums\AnimalStatus;
use App\Enums\Sex;
use App\Enums\Size;
use App\Enums\Species;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class AnimalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('user_id')
                    ->default(fn (): ?int => Auth::id())
                    ->required(),

                Section::make('Informações do animal')
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Nome')
                            ->maxLength(255)
                            ->required(),
                        Select::make('species')
                            ->label('Espécie')
                            ->options(collect(Species::cases())->mapWithKeys(
                                fn (Species $species): array => [$species->value => $species->label()],
                            )->all())
                            ->required(),
                        Select::make('sex')
                            ->label('Sexo')
                            ->options(collect(Sex::cases())->mapWithKeys(
                                fn (Sex $sex): array => [$sex->value => $sex->label()],
                            )->all())
                            ->required(),
                        Select::make('age_group')
                            ->label('Faixa etária')
                            ->options(collect(AgeGroup::cases())->mapWithKeys(
                                fn (AgeGroup $ageGroup): array => [$ageGroup->value => $ageGroup->label()],
                            )->all())
                            ->required(),
                        Select::make('size')
                            ->label('Porte')
                            ->options(collect(Size::cases())->mapWithKeys(
                                fn (Size $size): array => [$size->value => $size->label()],
                            )->all())
                            ->columnSpan(2)
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('Localização e disponibilidade')
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('city')
                            ->label('Cidade')
                            ->default(fn (): ?string => Auth::user()?->city)
                            ->maxLength(255)
                            ->required(),
                        Select::make('status')
                            ->label('Status')
                            ->options(collect(AnimalStatus::cases())->mapWithKeys(
                                fn (AnimalStatus $status): array => [$status->value => $status->label()],
                            )->all())
                            ->default(AnimalStatus::AVAILABLE->value)
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('Descrição')
                    ->columnSpan(2)
                    ->schema([
                        RichEditor::make('description')
                            ->label('Descrição')
                            ->maxLength(3000)
                            ->required()
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
