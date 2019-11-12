<?php

namespace App\Exports;

use App\lnegocio;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LineadenegocioExport implements FromCollection,Responsable,ShouldQueue,WithHeadings
{
    use Exportable;
    private $fileName = 'LineaDeNegocio.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return lnegocio::all('id','prefijo','descripcion');
    }
    public function headings(): array
    {
        return [
            'ID',
            'Prefijo',
            'Descripcion'
            
        ];
    }
}
