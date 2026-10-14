<?php

namespace App\Enums;

enum AgeGroup: string
{
    case CUB = 'cub';
    case YOUNG = 'young';
    case ADULT = 'adult';
    case ELDERLY = 'elderly';

    public function label(): string
    {
        return match ($this) {
            self::CUB => 'Filhote',
            self::YOUNG => 'Jovens',
            self::ADULT => 'Adulto',
            self::ELDERLY => 'Idoso',
        };
    }
}
