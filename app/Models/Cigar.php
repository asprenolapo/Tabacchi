<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cigar extends Model
{
    protected $fillable = [
        'name',
        'price',
        'madein',
        'tripa',
        'description',
        //'img'
    ];

    // public function images(){

    //     return $this->hasMany(Image::class);
        
    // }

    public function images() : HasMany
    {
        return $this->hasMany(Image::class);
    }
}
