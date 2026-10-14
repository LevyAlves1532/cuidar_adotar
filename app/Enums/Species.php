<?php

namespace App\Enums;

enum Species: string
{
    case DOG = 'dog';
    case CAT = 'cat';
    case OTHER = 'other';

    public function label(): string
    {
        return match ($this) {
            self::DOG => 'Cachorro',
            self::CAT => 'Gato',
            self::OTHER => 'Outro',
        };
    }
}
