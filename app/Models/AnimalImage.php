<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable('animal_id', 'path', 'is_primary')]
class AnimalImage extends Model
{
    protected $casts = [
        'is_primary' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::saving(function (AnimalImage $image): void {
            if (! $image->is_primary || ! $image->animal_id) {
                return;
            }

            static::query()
                ->where('animal_id', $image->animal_id)
                ->whereKeyNot($image->getKey())
                ->where('is_primary', true)
                ->update(['is_primary' => false]);
        });
    }

    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }
}
