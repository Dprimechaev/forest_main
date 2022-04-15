<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class First extends Model
{
    use HasFactory;

    protected $fillable =[
        'card_id',
        'republic',
        'district',
        'region',
        'quarter',
        'distance',
        'renter',
        'number',
        'area',
        'earthCategory',
        'protectionCategory',
        'cutWay',
        'ozu',
        'height',
        'exposition',
        'slope',
        'erozionForm',
        'erozionDegree',
        'firstEvent',
        'percent',
        'firstPtk',
        'secondEvent',
        'secondPtk',
        'thirdEvent',
        'thirdPtk',
        'target',
        'dominantBreed',
        'bonitetClass',
        'forestType',
        'tlu',
        'renter',
        'fireDangeros',
        'cutYear',
        'allStump',
        'pineStump',
        'stumpDiameter',
        'cutType',
        'littering',
        'liquid',
        'deadwood',
    ];
}
