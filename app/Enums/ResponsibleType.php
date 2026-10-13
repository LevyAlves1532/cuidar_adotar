<?php

namespace App\Enums;

enum ResponsibleType: string
{
    case ONG = 'ong';
    case SHELTER = 'shelter';
    case INDEPENDENT_PROTECTOR = 'independent_protector';

    public function label(): string
    {
        return match ($this) {
            self::ONG => 'ONG',
            self::SHELTER => 'Abrigo',
            self::INDEPENDENT_PROTECTOR => 'Protetor Independente',
        };
    }
}
