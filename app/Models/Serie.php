<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Relations\{HasMany, HasManyThrough, MorphOne};

class Serie extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = [
        'describe',
        'seasons',
    ];

    public function describe(): MorphOne
    {
        return $this->morphOne(Describe::class, 'describable');
    }

    public function seasons(): HasMany
    {
        return $this->hasMany(Season::class);
    }

    public function episodes(): HasManyThrough
    {
        return $this->hasManyThrough(Episode::class, Season::class);
    }
}
