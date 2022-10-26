<?php

namespace App\Exports;

use App\Models\Forms;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Http\Request;


class FormsExport implements FromCollection,WithHeadings
{

    protected $id;

    function __construct($id) {
           $this->id = $id;
    }

    public function headings():array{
        return[
            'Fish',
            'UOM',
            'Weight',
            '1/D',
            '10/15',
            '1/2',
            '2/3',
            '3/4',
            '3/5',
            '4/5',
            '4/6',
            '5/6',
            '5/8',
            '6/8',
            '8/10',
            '10/12',
            '12/15',
            '15 up',
            'Tcarton',
            'TKg',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Forms::where('created_at',$this->id)->get();
    }
}
