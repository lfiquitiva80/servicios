<?php

namespace App\Exports;

use App\provision;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MesprovisionExport implements FromQuery,ShouldQueue,WithHeadings 
{
    use Exportable;

    public function __construct($mes)
    {
        $this->mes = $mes;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return provision::query()
        ->join('proveedores','proveedores.id','=','provision.id_proveedor')
        ->join('centro_de_costos','centro_de_costos.id','=','provision.id_centro_de_costos')
        ->join('cliente','cliente.id','=','centro_de_costos.id_cliente')
        ->join('ot','ot.id','=','provision.id_ot')
        ->join('puc','puc.id','=','provision.id_puc')
        ->select(['proveedores.nit','proveedores.nombre as proveedoresname','cliente.nombre as clientename','cliente.nit as clientenit','centro_de_costos.centro_de_costos','ot.nombre','ot.cc','puc.descripcion','provision.auno','provision.ados','provision.clave','provision.clavedos','puc.cuenta','provision.detalle','provision.valor','provision.created_at','provision.updated_at'])
        ->where('mes',$this->mes);
    }
    public function headings(): array
    {
        return [
            'NIT/CC',
            'Nombre proveedor',
            'Nombre cliente',
            'Nit cliente',
            'Centro de costos',
            'Listado CC',
            'Centro de costos',
            'Concepto de la provision',
            'A1',
            'A2',
            'Clave',
            'Clave 2',
            'Cuenta',
            'Detalle',
            'Valor',
            'Fecha created',
            'Fecha updated'
            
        ];
    } 
}
