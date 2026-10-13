<?php

namespace App\Enums;

enum ResponsibleType: string
{
    case ONG                    = 'ong';
    case SHELTER                = 'shelter';
    case INDEPENDENT_PROTECTOR  = 'independent_protector';
}
