<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Describe extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'url_image',
        'describable_id',
        'describable_type',
    ];

    public function describable(): MorphTo
    {
        return $this->morphTo();
    }
}
