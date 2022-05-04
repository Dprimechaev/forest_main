<?php

namespace App\Exports;

use App\Models\Box;
use Auth;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon\Carbon;

class BoxExport implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;

    private $box;

    public function __construct(Box $box)
    {
        $this->box = $box;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->box->second;
    }

    public function map($second) : array {
        return [
//            $box->id,
//            $box->title,
//            $box->first->republic,
//            $box->second->tier,
        $second->tier
//            $box->third->age,
//            Carbon::parse($box->created_at)->toFormattedDateString()
        ] ;


    }

    public function headings() : array {
        return [
            '#',
            'Email',
            'Key#',
            'Plus One',
            'Event Date',
            'Created At'
        ] ;
    }
}
