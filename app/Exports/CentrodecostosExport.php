<?php

namespace App\Exports;

use App\c_costo;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CentrodecostosExport implements FromQuery,Responsable,ShouldQueue,WithHeadings
{
    use Exportable;

    private $fileName = 'CentroDeCostos.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return c_costo::query()
        ->join('cliente','cliente.id','=','centro_de_costos.id_cliente')
        ->select(['centro_de_costos.id','cliente.nit','cliente.nombre','centro_de_costos.centro_de_costos']);
    }
    public function headings(): array
    {
        return [
            'ID',
            'Nit cliente',
            'Nombre cliente',
            'Centro de costos'
        ];
    }
}
