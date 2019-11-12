<?php

namespace App\Exports;

use App\calendario;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CalendarioprefacturaExport implements FromCollection,ShouldQueue,WithHeadings,Responsable
{
    use Exportable;

    private $fileName = 'Calendario.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return calendario::all('id','date','created_at','updated_at');
    }


    public function headings(): array
    {
        return [
            'ID',
            'Fecha',
            'Fecha created',
            'Fecha updated'  
        ];
    }
}
