<?php

namespace App\Http\Controllers;

use App\Models\Box;

class HomeController extends Controller
{

    public function index()
    {
        $boxes = Box::where('user_id', \Auth::id())->get();
        return view('home', compact('boxes'));
    }
}
