<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HerbaceousPlants extends Model
{
    use HasFactory;

    protected $fillable = [
        'accounting_category',
        'herbal_plants',
        'first_plants',
        'first_coverage',
        'second_plants',
        'second_coverage',
        'third_plants',
        'third_coverage',








    ];
}
