<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cigar extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'price',
        'madein',
        'origin_description',
        'manufacturing',
        'band',
        'vitoladegalera',
        'cepo',
        'tripa',
        'intensity',
        'smoketime',
        'flavors',
        'bestSellers',
        'description',
        'packaging',
    ];


    public function images() : HasMany
    {
        return $this->hasMany(Image::class);
    }
}
