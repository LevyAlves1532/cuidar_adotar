<?php

namespace App\Filament\Caregiver\Widgets;

use App\Enums\AnimalStatus;
use App\Models\Animal;
use App\Models\Interest;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class StatOverviewWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $caregiverId = Auth::id();

        $totalAnimals = Animal::query()
            ->where('user_id', $caregiverId)
            ->count();

        $availableAnimals = Animal::query()
            ->where('user_id', $caregiverId)
            ->where('status', AnimalStatus::AVAILABLE->value)
            ->count();

        $totalInterests = Interest::query()
            ->whereHas('animal', fn (Builder $query): Builder => $query->where('user_id', $caregiverId))
            ->count();

        return [
            Stat::make('Total de Animais', $totalAnimals),
            Stat::make('Total de Animais Disponíveis', $availableAnimals),
            Stat::make('Total de Interessados', $totalInterests),
        ];
    }
}
