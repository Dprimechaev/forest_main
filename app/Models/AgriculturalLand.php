<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgriculturalLand extends Model
{
    use HasFactory;

    protected $fillable = [
        'land_user',
        'land_quality',
        'pasture_type',
        'land_condition',
        'land_overgrowing',
        'overgrowing_percentage',
        'hayfield_yield',
    ];
}
