<?php

namespace App\Exports;

use App\cliente;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ClienteExport implements FromQuery,Responsable,ShouldQueue,WithHeadings
{
    use Exportable;
    private $fileName = 'Cliente.xlsx';

    /**
    * @return \Illuminate\Support\FromQuery
    */
    public function  query()
    {
        return cliente::query()
        ->select('cliente.id','cliente.nit','cliente.nombre','cliente.solicitante','cliente.telefono','cliente.email','cliente.notas','cliente.coordinador','centro_de_costos.centro_de_costos','cliente.activo')
        ->leftJoin('centro_de_costos','centro_de_costos.id','=','cliente.id_centrodecostos');
        
    }
    public function headings(): array
    {   
        return [
            'ID',
            'Nit',
            'NombreCliente',
            'Solicitante',
            'Telefono',
            'Email',
            'Notas',
            'Coordinador',
            'Centro de costos',
            'Activo'
        ];
    }
}
