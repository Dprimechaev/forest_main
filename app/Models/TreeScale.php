<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreeScale extends Model
{
    use HasFactory;

    protected $fillable = [
        'plantation_appointment',
        'plantation_year',
        'plantation_between',
        'plantation_into',
        'plantation_number',
    ];
}
