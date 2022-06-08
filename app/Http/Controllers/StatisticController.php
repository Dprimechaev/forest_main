<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index(Request $request, Box $box)
    {
        $firsts = $box->first()->get();
        $summ = 0;
        $number = count($firsts);
        foreach ($firsts as $first){
            $summ += $first->area;
        }
        return view('box.data', [
            'box' => $box, 'summ' => $summ,
            'number' => $number
            ]);
    }
}
