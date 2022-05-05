<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CedarForest extends Model
{
    use HasFactory;

    protected $fillable = [
        'complex_type',
        'yield_score',
        'biological_harvest',
        'complex_rank',
        'resin_productivity',
        'cedar_stock',
        'fir_stock',
    ];
}
