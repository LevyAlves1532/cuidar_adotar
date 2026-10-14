<?php

namespace App\Enums;

enum AnimalStatus: string
{
    case AVAILABLE = 'available';
    case IN_PROGRESS = 'in_progress';
    case ADOPTED = 'adopted';

    public function label(): string
    {
        return match ($this) {
            self::AVAILABLE => 'Disponível',
            self::IN_PROGRESS => 'Em processo',
            self::ADOPTED => 'Adotado',
        };
    }
}
