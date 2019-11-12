<?php

namespace App\Exports;

use App\ot;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OtExport implements FromCollection,Responsable,ShouldQueue,WithHeadings
{
    use Exportable;
    private $fileName = 'OT.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ot::all('id','nombre','cc');
    }
    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'CC'
           
        ];
    }
}
