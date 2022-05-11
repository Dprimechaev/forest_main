<?php

namespace App\Http\Controllers;

use App\Exports\BoxExport;
use App\Exports\CardExport;
use App\Models\Box;
use Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export(Box $box)
    {
        return Excel::download(new CardExport($box), 'box.xlsx');
    }
}
