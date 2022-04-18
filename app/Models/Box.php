<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    protected $table = 'box';

    protected $fillable = [
        'title',
        'user_id'
    ];

    public function card()
    {
        return $this->hasMany(Card::class);
    }

    public function third()
    {
        return $this->hasOneThrough(Third::class, Card::class);
    }

    public function second()
    {
        return $this->hasManyThrough(Second::class, Card::class);
    }

    public function first()
    {
        return $this->hasOneThrough(First::class, Card::class);
    }
}
