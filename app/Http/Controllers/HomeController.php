<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $boxes = Box::where('user_id', \Auth::id())->get();
        return view('home', compact('boxes'));
    }
}
