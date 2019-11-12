<?php

namespace App\Exports;

use App\tarifario;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class tarifarioExport implements FromQuery,ShouldQueue,WithHeadings,Responsable
{
    use Exportable;
    private $fileName = 'Tarifario.xlsx';

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return tarifario::query()
        ->join('tipo_de_tarifa','tipo_de_tarifa.id','=','tarifa_estandar.id_tipodetarifa')
        ->join('descripcion_tarifa','descripcion_tarifa.id','tarifa_estandar.id_descripciontarifa')
        ->select('tarifa_estandar.id','propuesta_economica.numero_propuesta','tipo_de_tarifa.nombre','descripcion_tarifa.descripcion','tarifa_estandar.ciudad','tarifa_estandar.year','tarifa_estandar.valor_ciudad','tarifa_estandar.created_at','tarifa_estandar.updated_at')
        ->leftjoin('propuesta_economica','propuesta_economica.id','tarifa_estandar.id_propuesta_economica');

    }
    public function headings(): array
    {
        return [
            'ID',
            'N° propuesta económica',
            'Tipo de tarifa',
            'Descripcion',
            'Ciudad',
            'Año',
            'Valor ciudad',
            'Fecha created',
            'Fecha updated'
        ];
    }
}
