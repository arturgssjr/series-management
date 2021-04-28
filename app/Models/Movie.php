<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Movie extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['describe'];

    public function describe(): MorphOne
    {
        return $this->morphOne(Describe::class, 'describable');
    }
}
