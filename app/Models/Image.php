<?php

namespace App\Models;

use App\Models\Cigar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'path'
    ];

<<<<<<< HEAD
    public function cigar(): BelongsTo
=======
    public function cigar() : BelongsTo
>>>>>>> 83b0b27db5525fd47f64f252581a6378505866cf
    {
        return $this->belongsTo(Cigar::class);
    }
}
