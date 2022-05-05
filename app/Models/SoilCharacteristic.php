<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoilCharacteristic extends Model
{
    use HasFactory;

    protected $fillable = [
        'soil_type',
        'mechanical_composition',
        'soil_moisture',
        'turf_degree',
        'soil_power',
        'output_percentage',
    ];
}
