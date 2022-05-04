<?php

namespace App\Http\Controllers;

use App\Exports\BoxExport;
use App\Models\Box;
use Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export(Box $box)
    {
        $box = Box::where('user_id', Auth::id())->with('first', 'second', 'third')->get();
        return Excel::download(new BoxExport($box), 'box.xlsx');
    }
}
