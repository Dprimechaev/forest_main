<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garden extends Model
{
    use HasFactory;

    protected $fillable = [
        'garden_category',
        'bookmark_year',
        'garden_breed',
        'between_rows',
        'row_spacing',
        'trees_number',
        'fruit_bearing',
        'garden_yield',
    ];
}
