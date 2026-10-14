<?php

namespace App\Enums;

enum Size: string
{
    case SMALL = 'small';
    case MEDIUM = 'medium';
    case BIG = 'big';

    public function label(): string
    {
        return match ($this) {
            self::SMALL => 'Pequeno',
            self::MEDIUM => 'Médio',
            self::BIG => 'Grande',
        };
    }
}
