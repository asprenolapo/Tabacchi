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
        'path',
        'cigar_id'
    ];

    public function cigar(): BelongsTo
    {
        return $this->belongsTo(Cigar::class);
    }
}
