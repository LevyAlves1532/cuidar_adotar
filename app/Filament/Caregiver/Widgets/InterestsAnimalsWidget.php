<?php

namespace App\Filament\Caregiver\Widgets;

use App\Models\Animal;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\Auth;

class InterestsAnimalsWidget extends ChartWidget
{
    protected ?string $heading = 'Animais com mais demonstração de interesse';

    protected static ?int $sort = 10;

    protected function getData(): array
    {
        $animals = Animal::query()
            ->where('user_id', Auth::id())
            ->withCount('interests')
            ->orderByDesc('interests_count')
            ->orderBy('name')
            ->limit(5)
            ->get(['id', 'name']);

        return [
            'datasets' => [
                [
                    'label' => 'Interesses',
                    'data' => $animals->pluck('interests_count')->all(),
                    'backgroundColor' => '#f97316',
                    'borderColor' => '#ea580c',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $animals->pluck('name')->all(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
