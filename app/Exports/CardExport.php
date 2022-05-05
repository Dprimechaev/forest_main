<?php

namespace App\Exports;

use App\Models\Box;
use Auth;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CardExport implements FromView, ShouldAutoSize
{
    public function view() : View
    {
        $boxs = Box::where('user_id', Auth::id())->with('first', 'second', 'third')->get();
        return view('export.index', [
            'boxs' => $boxs
        ]);
    }
}
