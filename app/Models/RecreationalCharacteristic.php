<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecreationalCharacteristic extends Model
{
    use HasFactory;

    protected $fillable = [
        'landscape_type',
        'aesthetic_class',
        'recreational_class',
        'stability_class',
        'passability_degree',
        'viewability',
        'degradation_stages',
        'improvement_elements',
    ];
}
