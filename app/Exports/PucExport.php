<?php

namespace App\Exports;

use App\puc;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;


class PucExport implements FromCollection,Responsable,ShouldQueue,WithHeadings
{
    use Exportable;
    private $fileName = 'Puc.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return puc::all('id','cuenta','descripcion');
    }
    public function headings(): array
    {
        return [
            'ID',
            'Cuenta',
            'Descripcion'
        ];
    }
}
