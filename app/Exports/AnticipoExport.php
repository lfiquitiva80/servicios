<?php

namespace App\Exports;

use App\anticipo;
use App\provision;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AnticipoExport implements FromQuery,Responsable,ShouldQueue
{
    use Exportable;
    private $fileName = 'Anticipos.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return anticipo::query()
            ->join('ordenesdeservicio','ordenesdeservicio.id','=','anticipo.id_ordendeservicio')
            ->join('estadoservicio', 'estadoservicio.id', '=', 'ordenesdeservicio.estadoservicio_id')
            ->join('escolta', 'escolta.id', '=', 'ordenesdeservicio.Escolta_asignado')
            ->join('vehiculo', 'vehiculo.id', '=', 'ordenesdeservicio.placa')
            ->join('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
            ->join('tipodevehiculo', 'tipodevehiculo.id', '=', 'ordenesdeservicio.tipo')
            ->join('tiposervicio', 'tiposervicio.id', '=', 'ordenesdeservicio.tipo_de_servicio')
            ->join('solicitanteinterno', 'solicitanteinterno.id', '=', 'ordenesdeservicio.solicitante_interno')
            ->select('anticipo.id as anticipoid','anticipo.valor as anticipovalor','ordenesdeservicio.*','estadoservicio.*', 'vehiculo.*', 'solicitanteinterno.*', 'cliente.*', 'tiposervicio.*', 'tipodevehiculo.*', 'escolta.*');

    }
}
