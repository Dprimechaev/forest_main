<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailabilityImpact extends Model
{
    use HasFactory;

    protected $fillable = [
        'availability',
        'transport_type',
        'tracks_distance',
    ];
}
