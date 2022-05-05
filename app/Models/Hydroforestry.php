<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hydroforestry extends Model
{
    use HasFactory;

    protected $fillable = [
        'drainage_network',
        'commissioning_year',
        'old_category',
        'tree_species',
        'dryer_distance',
        'dryers_between',
        'growth_class',
    ];
}
