<?php

namespace App\Filament\Caregiver\Pages;

use App\Enums\ResponsibleType;
use App\Models\User;
use Filament\Auth\Pages\EditProfile;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CustomProfile extends EditProfile
{
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Dados pessoais')
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getEmailFormComponent(),
                    ]),

                Section::make('Dados do cuidador')
                    ->schema([
                        Select::make('responsible_type')
                            ->label('Tipo de responsável')
                            ->options(collect(ResponsibleType::cases())->mapWithKeys(
                                fn (ResponsibleType $type): array => [$type->value => $type->label()],
                            )->all())
                            ->required(),
                        TextInput::make('city')
                            ->label('Cidade')
                            ->maxLength(255)
                            ->datalist(fn (): array => User::query()
                                ->whereNotNull('city')
                                ->where('city', '!=', '')
                                ->distinct()
                                ->orderBy('city')
                                ->pluck('city')
                                ->all())
                            ->required(),
                        TextInput::make('phone')
                            ->label('Telefone')
                            ->tel()
                            ->maxLength(30)
                            ->mask('(99) 9 9999-9999')
                            ->required(),
                        Textarea::make('description')
                            ->label('Descrição')
                            ->rows(5)
                            ->maxLength(1000)
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Segurança')
                    ->schema([
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                        $this->getCurrentPasswordFormComponent(),
                    ]),
            ]);
    }
}
