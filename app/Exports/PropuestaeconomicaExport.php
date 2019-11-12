<?php

namespace App\Exports;

use App\propuestaeconomica;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PropuestaeconomicaExport implements FromQuery,ShouldQueue,WithHeadings,Responsable
{
    use Exportable;
    private $fileName = 'PropuestaEconomica.xlsx';

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return propuestaeconomica::query()
        ->join('cliente','cliente.id','=','propuesta_economica.id_cliente')
        // ->select(['propuesta_economica.id','propuesta_economica.numero_propuesta','cliente.nombre','propuesta_economica.antencion','propuesta_economica.email','propuesta_economica.contacto_ot','propuesta_economica.cargo','propuesta_economica.fecha','propuesta_economica.numero_dia','propuesta_economica.numero_puesto','propuesta_economica.descripcion','propuesta_economica.ciudad','propuesta_economica.condicion_salarial','propuesta_economica.dotacion','propuesta_economica.und','propuesta_economica.valor_unitario','propuesta_economica.valor_total','propuesta_economica.created_at','propuesta_economica.updated_at']);
        ->select(['propuesta_economica.id','propuesta_economica.numero_propuesta','cliente.nombre','propuesta_economica.antencion','propuesta_economica.email','propuesta_economica.contacto_ot','propuesta_economica.cargo','propuesta_economica.fecha','propuesta_economica.descripcion','codigo_ciudad.ciudad','propuesta_economica.created_at','propuesta_economica.updated_at'])
        ->leftJoin('codigo_ciudad','codigo_ciudad.id','=','propuesta_economica.id_ciudad');

    }
    public function headings(): array
    {
        return [
            'ID',
            'N° PROPUESTA ECONOMICA',
            'CLIENTE',
            'ATENCION',
            'EMAIL',
            'CONTACTO OT',
            'CARGO',
            'FECHA',
            // 'NUMERO DE DIAS',
            // 'NUMERO DE PUESTOS',
            'DESCRIPCIÓN DEL SERVICIO',
            'CIUDAD',
            // 'CONDICIONES SALARIALES',
            // 'DOTACIÓN DEL SERVICIO',
            // 'UND',
            // 'VALOR UNITARIO',
            // 'VALOR TOTAL',
            'FECHA CREATED',
            'FECHA UPDATED'
        ];
    }
}
