<?php

namespace App\Exports;

use App\Models\Box;
use App\Models\Second;
use Auth;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon\Carbon;

class BoxExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    use Exportable;

    private $box;

    public function __construct($box)
    {
        $this->box = $box;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->box;
    }

    public function map($box): array
    {
        $rows = [];
        $rows[] = $box->title;
        $rows[] = $box->first;
        foreach ($box->second as $second) {
            $rows[] = $second;
        }
        $rows[] = $box->third;
        dd($rows);
        return $rows;
    }

    public function headings(): array
    {
        return [
            'title',
            'first',
            'second',
            'third',
            'Event Date',
            'Created At'
        ];
    }
}
