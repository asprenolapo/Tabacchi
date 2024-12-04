<?php

namespace App\Models;

use App\Models\Cigar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    protected $fillable = [
        'path'
    ];

    public function cigar(): BelongsTo
    {
        return $this->belongsTo(Cigar::class);
    }
}
