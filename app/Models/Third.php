<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Third extends Model
{
    use HasFactory;

    protected $table = 'thirds';

    protected $fillable = [
        'card_id',
        'thousands',
        'height',
        'age',
        'koefOne',
        'podrostOne',
        'koefTwo',
        'podrostTwo',
        'koefThree',
        'podrostThree',
        'por',
        'Oc',
        'density',
        'podlesokOne',
        'podlesokTwo',
        'podlesokThree',
    ];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
