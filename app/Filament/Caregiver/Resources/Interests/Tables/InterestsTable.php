<?php

namespace App\Filament\Caregiver\Resources\Interests\Tables;

use App\Models\Interest;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class InterestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Interessado')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('E-mail')
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Telefone')
                    ->formatStateUsing(fn (?string $state): ?string => $state === null ? null : self::formatPhone($state)),
                TextColumn::make('animal.name')
                    ->label('Animal')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Recebido em')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->searchPlaceholder('Pesquisar interessado, e-mail ou animal...')
            ->filters([
                SelectFilter::make('animal_id')
                    ->label('Animal')
                    ->relationship('animal', 'name', fn ($query) =>
                        $query->where('user_id', Auth::id())),
            ])
            ->recordActions([
                ViewAction::make()
                    ->hiddenLabel(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    private static function formatPhone(?string $phone): string
    {
        $digits = preg_replace('/\D+/', '', $phone) ?? '';

        return strlen($digits) === 11
            ? sprintf('(%s) %s-%s', substr($digits, 0, 2), substr($digits, 2, 5), substr($digits, 7))
            : $phone;
    }
}
