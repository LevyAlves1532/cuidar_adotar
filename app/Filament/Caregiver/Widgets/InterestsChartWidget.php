<?php

namespace App\Filament\Caregiver\Widgets;

use App\Models\Interest;
use Filament\Widgets\ChartWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class InterestsChartWidget extends ChartWidget
{
    protected ?string $heading = 'Últimos interessados dos 6 meses';

    protected static ?int $sort = 30;

    /**
     * @var int | string | array<string, int | null>
     */
    protected int|string|array $columnSpan = 2;

    protected function getData(): array
    {
        $startOfPeriod = now()->startOfMonth()->subMonths(5);
        $labels = [];
        $interestsByMonth = [];

        for ($month = 0; $month < 6; $month++) {
            $monthStart = $startOfPeriod->copy()->addMonths($month);
            $nextMonthStart = $monthStart->copy()->addMonth();

            $labels[] = $this->getMonthLabel($monthStart);
            $interestsByMonth[] = Interest::query()
                ->whereHas('animal', fn (Builder $query): Builder => $query->where('user_id', Auth::id()))
                ->where('created_at', '>=', $monthStart)
                ->where('created_at', '<', $nextMonthStart)
                ->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Interessados',
                    'data' => $interestsByMonth,
                    'borderColor' => '#f97316',
                    'backgroundColor' => 'rgba(249, 115, 22, 0.2)',
                    'fill' => true,
                    'tension' => 0.3,
                ],
            ],
            'labels' => $labels,
        ];
    }

    private function getMonthLabel(Carbon $month): string
    {
        return match ($month->month) {
            1 => 'Jan',
            2 => 'Fev',
            3 => 'Mar',
            4 => 'Abr',
            5 => 'Mai',
            6 => 'Jun',
            7 => 'Jul',
            8 => 'Ago',
            9 => 'Set',
            10 => 'Out',
            11 => 'Nov',
            12 => 'Dez',
        }.'/'.$month->format('Y');
    }

    protected function getType(): string
    {
        return 'line';
    }
}
