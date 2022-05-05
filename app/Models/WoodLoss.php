<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WoodLoss extends Model
{
    use HasFactory;

    protected $fillable = [
        'loss_category',
        'loss_location',
        'breed',
        'stock_total',
        'liquid_stock',
        'commercial_stock',
        'loss_square',
    ];
}
