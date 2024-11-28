<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cigar extends Model
{
    protected $fillable = [
        'name',
        'price',
        'madein',
        'tripa',
        'description',
        'img'
    ];
}
