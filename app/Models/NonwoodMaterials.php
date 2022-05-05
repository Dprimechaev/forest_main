<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonwoodMaterials extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_category',
        'tree_type',
        'age',
        'height',
        'measurement_unit',
        'yield',
        'harvest_availability',
    ];
}
