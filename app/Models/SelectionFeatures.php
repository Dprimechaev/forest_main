<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectionFeatures extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_peculiarity',
        'second_peculiarity',
        'third_peculiarity',
        'fourth_peculiarity',
        'fifth_peculiarity',
        'sixth_peculiarity',
        'seventh_peculiarity',
    ];
}
