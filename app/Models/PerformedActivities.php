<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformedActivities extends Model
{
    use HasFactory;

    protected $fillable = [
        'event',
        'year',
        'tree',
        'stock',
        'analysis',
        'performance',
        'reason_performance',
        'square',
    ];
}
