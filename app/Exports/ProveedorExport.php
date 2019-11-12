<?php

namespace App\Exports;

use App\proveedor;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ProveedorExport implements FromCollection,ShouldQueue,WithHeadings,Responsable
{
    use Exportable;
    private $fileName = 'Proveedores.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return proveedor::all('id','nit','nombre');
         

    }
    public function headings(): array
    {
        return [
            'ID',
            'NIT',
            'NOMBRE'
        ];
    }

}
