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

<<<<<<< HEAD
    public function images(): HasMany{
=======
    // public function images(){
>>>>>>> 83b0b27db5525fd47f64f252581a6378505866cf

    //     return $this->hasMany(Image::class);
        
    // }

    public function images() : HasMany
    {
        return $this->hasMany(Image::class);
    }
}
