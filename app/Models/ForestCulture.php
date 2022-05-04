<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForestCulture extends Model
{
    use HasFactory;

    protected $fillable = [
        'year_created',
        'cultivation_method',
        'method_created',
        'distance_between',
        'distance_into',
        'seats_number',
        'condition',
        'cause',
        'card_id'
    ];

}
