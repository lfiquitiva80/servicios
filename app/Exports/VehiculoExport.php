<?php

namespace App\Exports;

use App\vehiculo;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;


class VehiculoExport implements FromQuery,Responsable,ShouldQueue,WithHeadings
{
    use Exportable; 
    private $fileName = 'Vehiculos.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return vehiculo::query()
        ->select(['vehiculo.id','vehiculo.placa','vehiculo.rentadora','vehiculo.tipo_de_renta','vehiculo.armadura','vehiculo.descripcion','vehiculo.color','vehiculo.fecha_soat','vehiculo.fecha_licencia','vehiculo.fecha_poliza','vehiculo.fecha_tecnomecanica','proveedores.nombre','vehiculo.activo']) 
        ->leftJoin('proveedores','proveedores.id','=','vehiculo.id_proveedor');         
    }
    public function headings(): array
    {
        return [
            'id',
            'Placa',
            'Rentadora',
            'Tipo de renta',
            'Armadura',
            'Descripcion',
            'Color',
            'Fecha soat',
            'Fecha licencia',
            'Fecha poliza',
            'Fecha tecnomecanica',
            'Proveedor nombre',
            'Activo'
        ];
    }
}
