<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pivot extends Model
{
    use HasFactory;

    protected $fillable = [
        'breeding_start',
        'planned_end',
        'actual_completion',
        'planting_condition',
        'condition_reason',
        'diagram_number',
        'violation_technology',
        'chemical_stimulant',
    ];
}
