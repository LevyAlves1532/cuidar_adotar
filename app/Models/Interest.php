<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable('animal_id', 'name', 'email', 'phone', 'message')]
class Interest extends Model
{
    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }
}
