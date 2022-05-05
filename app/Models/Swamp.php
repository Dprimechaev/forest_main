<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swamp extends Model
{
    use HasFactory;

    protected $fillable = [
        'swamp_type',
        'swamp_vegetation',
        'layer_thickness',
        'overgrowing_rock',
        'swamp_overgrowing',
    ];
}
