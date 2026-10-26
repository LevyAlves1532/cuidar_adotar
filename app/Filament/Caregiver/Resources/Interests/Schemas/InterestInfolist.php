<?php

namespace App\Filament\Caregiver\Resources\Interests\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class InterestInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Interessado'),
                TextEntry::make('email')
                    ->label('E-mail'),
                TextEntry::make('phone')
                    ->label('Telefone'),
                TextEntry::make('animal.name')
                    ->label('Animal'),
                TextEntry::make('message')
                    ->label('Motivação')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->label('Recebido em')
                    ->dateTime('d/m/Y H:i'),
            ]);
    }
}
