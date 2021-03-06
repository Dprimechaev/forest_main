<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Second extends Model
{
    use HasFactory;

    protected $table = 'seconds';

    protected $fillable = [
        'tier',
        'coefComposition',
        'speciesComposition',
        'origin',
        'age',
        'height',
        'diameter',
        'class',
        'density',
        'g',
        'stock',
    ];

    public function card()
    {
        $this->belongsTo(Card::class);
    }
}
