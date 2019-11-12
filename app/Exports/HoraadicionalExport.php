<?php

namespace App\Exports;

use App\horaAdicional;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HoraadicionalExport implements FromQuery,ShouldQueue,WithHeadings,Responsable
{
    use Exportable;
    private $fileName = 'Hora_adicional.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return horaAdicional::query()
        ->join('tipo_de_tarifa','tipo_de_tarifa.id','=','hora_adicional.id_tipodetarifa')
        ->join('descripcion_hora_adicional','descripcion_hora_adicional.id','=','hora_adicional.id_descripcionhoraadicional')
        ->select(['hora_adicional.id','propuesta_economica.numero_propuesta','tipo_de_tarifa.nombre as name','descripcion_hora_adicional.nombre','hora_adicional.year','hora_adicional.valor','hora_adicional.created_at','hora_adicional.updated_at'])
        ->leftjoin('propuesta_economica','propuesta_economica.id','hora_adicional.id_propuesta_economica');

    }
    public function headings(): array
    {
        return [
            'ID',
            'N° propuesta económica',
            'Tipo de tarifa',
            'Descripcion',
            'Año',
            'Valor',
            'Fecha created',
            'Fecha updated'
        ];
    }
}
