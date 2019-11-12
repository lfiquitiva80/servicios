<?php

namespace App\Exports;

use App\prefacturacion;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;


class PrefacturaclienteExport implements FromQuery,ShouldQueue,WithHeadings,Responsable
{
    use Exportable;
    private $fileName = 'Prefactura.xlsx';

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
      return prefacturacion::
      join('ordenesdeservicio','ordenesdeservicio.id','=','prefacturacion.id_ordendeservicio')
      ->join('vehiculo', 'vehiculo.id', '=', 'ordenesdeservicio.placa')
      ->join('cliente','cliente.id','=','ordenesdeservicio.cliente')
      ->join('escolta','escolta.id','=','ordenesdeservicio.Escolta_asignado')
      ->join('fs','fs.id','=','prefacturacion.id_fs')
      ->join('codigo_ciudad','codigo_ciudad.id','=','prefacturacion.id_ciudad')
      ->join('propuesta_economica','propuesta_economica.id','=','prefacturacion.id_propuesta_economica')
      ->join('estado_facturacion','estado_facturacion.id','=','prefacturacion.id_estado_facturacion')
      ->select(['prefacturacion.id','cliente.nit','cliente.nombre as clientename ','fs.descripcion','codigo_ciudad.codigo','codigo_ciudad.ciudad','escolta.nombre','vehiculo.placa','propuesta_economica.numero_propuesta','prefacturacion.numero_prefactura','prefacturacion.fecha_prefactura','prefacturacion.fecha_de_servicio','tarifa_estandar.item_oxy','horas_adicionales.horario','horas_adicionales.detalle','horas_adicionales.cantidad','horas_adicionales.valor_unitario','horas_adicionales.valor_total','ordenesdeservicio.No_de_orden_de_servicio','prefacturacion.fecha_factura','prefacturacion.factura','estado_facturacion.estado','prefacturacion.observacion','prefacturacion.descripcion_factura','prefacturacion.proveedor','users.name','prefacturacion.centrodecostos','prefacturacion.created_at','prefacturacion.updated_at'])
      ->leftJoin('horas_adicionales','horas_adicionales.id_prefacturacion','=','prefacturacion.id')
      
      ->leftJoin('tarifa_estandar','tarifa_estandar.id','=','horas_adicionales.id_tarifa_estandar')

      ->leftJoin('users','users.id','=','prefacturacion.responsable');



    }
    
  

    public function headings(): array
    {
        return [
            'ID',
            'NIT',
            'CLIENTE',
            'LINEA DE NEGOCIO',
            'CODIGO CIUDAD',
            'CIUDAD',
            'NOMBRE ESCOLTA',
            'PLACA',
            'PROPUESTA',
            'Nº PREFACTURA',
            'FECHA PREFACTURA',
            'FECHA DE SERVICIO',
            'ITEM OXY',
            'HORARIO',
            'DETALLE',
            'CANTIDAD',
            'VALOR UNITARIO',
            'VALOR TOTAL SERVICIO',
            'ORDEN DE SERVICIO',
            'FECHA FACTURA',
            'FACTURA',
            'ESTADO FACTURACIÓN',
            'OBSERVACIÓN',
            'DESCRIPCIÓN FACTURA',
            'PROVEEDOR',
            'RESPONSABLE',
            'CENTRO DE COSTOS OXY',
            'FECHA CREATED',
            'FECHA UPDATE'
        ];
    }

}
