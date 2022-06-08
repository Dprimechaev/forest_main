<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandDamage extends Model
{
    use HasFactory;

    protected $fillable = [
        'damage_type',
        'damage_year',
        'damaged_tree',
        'disease_type',
        'disease_damage',
        'pest_type',
        'pest_damage',
        'created_at',
        'updated_at'
    ];
}
