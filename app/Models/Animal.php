<?php

namespace App\Models;

use App\Enums\AgeGroup;
use App\Enums\AnimalStatus;
use App\Enums\Sex;
use App\Enums\Size;
use App\Enums\Species;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Fillable('user_id', 'name', 'species', 'sex', 'age_group', 'size', 'city', 'description', 'status')]
class Animal extends Model
{
    protected $casts = [
        'species' => Species::class,
        'sex' => Sex::class,
        'age_group' => AgeGroup::class,
        'size' => Size::class,
        'status' => AnimalStatus::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(AnimalImage::class, 'animal_id');
    }

    public function primaryImage(): HasOne
    {
        return $this->hasOne(AnimalImage::class, 'animal_id')
            ->where('is_primary', true);
    }
}
