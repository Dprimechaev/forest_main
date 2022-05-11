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
    public function __construct($box)
    {
        $this->box = $box;
    }

    public function view() : View
    {
        return view('export.index', [
            'box' => $this->box
        ]);
    }
}
