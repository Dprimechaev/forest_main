<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinearLands extends Model
{
    use HasFactory;

    protected $fillable = [
        'width',
        'length',
        'state',
        'road_purpose',
        'coating_type',
        'roadway_width',
        'seasonality',
    ];
}
