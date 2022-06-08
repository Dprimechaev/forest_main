<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index(Request $request, Box $box)
    {
        return view('box.data', compact('box'));
    }
}
