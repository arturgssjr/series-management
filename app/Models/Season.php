<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany};

class Season extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'number',
        'serie_id'
    ];

    protected $with = ['episodes'];

    public function serie(): BelongsTo
    {
        return $this->belongsTo(Serie::class);
    }

    public function episodes(): HasMany
    {
        return $this->hasMany(Episode::class);
    }
}
