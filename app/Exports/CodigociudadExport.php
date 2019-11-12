<?php

namespace App\Exports;

use App\codigociudad;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CodigociudadExport implements FromCollection,ShouldQueue,WithHeadings,Responsable
{
    use Exportable;

    private $fileName = 'Codigociudad.xlsx';

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return codigociudad::all('id','codigo','ciudad','departamento','created_at','updated_at');
    }

    public function headings(): array
    {
        return [
            'ID',
            'Codigo',
            'Ciudad',
            'Departamento',
            'Fecha created',
            'Fecha updated'
            
        ];
    }
}
