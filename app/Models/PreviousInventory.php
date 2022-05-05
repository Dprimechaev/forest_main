<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousInventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'partition_number',
        'partation_square',
        'partation_category',
        'partation_coefficient',
        'partation_dominant',
        'partation_main',
        'partation_completeness',
        'projected_event',
    ];
}
