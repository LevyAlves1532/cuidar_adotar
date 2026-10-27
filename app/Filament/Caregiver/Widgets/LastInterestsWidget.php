<?php

namespace App\Filament\Caregiver\Widgets;

use App\Filament\Caregiver\Resources\Animals\Pages\ViewAnimal;
use App\Filament\Caregiver\Resources\Interests\Pages\ViewInterest;
use App\Models\Interest;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class LastInterestsWidget extends TableWidget
{
    protected static ?int $sort = 20;

    public function table(Table $table): Table
    {
        return $table
            ->heading('Últimos interesses')
            ->query(fn (): Builder => Interest::query()
                ->whereHas('animal', fn ($q) => $q->where('user_id', Auth::id()))
                ->orderBy('created_at', 'desc')
                ->limit(5))
            ->paginated(false)
            ->columns([
                TextColumn::make('name')
                    ->label('Interessado'),
                TextColumn::make('animal.name')
                    ->label('Animal')
                    ->badge()
                    ->icon(Heroicon::BugAnt)
                    ->url(fn (Interest $record) => ViewAnimal::getUrl(['record' => $record->animal->id])),
                TextColumn::make('created_at')
                    ->label('Recebido em')
                    ->dateTime('d/m H:i'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                ViewAction::make()
                    ->hiddenLabel()
                    ->url(fn (Interest $record) => ViewInterest::getUrl(['record' => $record->id])),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
