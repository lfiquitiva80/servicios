<?php

namespace App\Exports;

use App\prefacturaoxy;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PrefacturaoxyExport implements FromQuery,ShouldQueue,WithHeadings,Responsable
{
    use Exportable;
    private $fileName = 'Prefacturaoxy.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function  query()
    {
        return prefacturaoxy::query()
         ->join('ordenesdeservicio','ordenesdeservicio.id','=','prefacturacion_oxy.id_ordendeservicio')
         ->join('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
         ->join('estado_facturacion','estado_facturacion.id','=','prefacturacion_oxy.id_estado_facturacion')
         ->select(['prefacturacion_oxy.id','cliente.nit','cliente.nombre as clientenombre','prefacturacion_oxy.periodo','prefacturacion_oxy.item_de_contrato','prefacturacion_oxy.linea_de_negocio','ordenesdeservicio.No_de_orden_de_servicio','prefacturacion_oxy.detalle','prefacturacion_oxy.ciudad','prefacturacion_oxy.propuesta','prefacturacion_oxy.numero_factura','prefacturacion_oxy.fecha_prefactura','prefacturacion_oxy.hora_inicio','prefacturacion_oxy.hora_final','prefacturacion_oxy.cantidad','prefacturacion_oxy.fecha_servicio','prefacturacion_oxy.valor_unitario','prefacturacion_oxy.valor_total','prefacturacion_oxy.centrodecostos','prefacturacion_oxy.observacion_prefactura','estado_facturacion.estado','prefacturacion_oxy.fecha_factura','prefacturacion_oxy.valor_facturado','prefacturacion_oxy.observaciones','users.name','prefacturacion_oxy.factura_proveedor','prefacturacion_oxy.created_at','prefacturacion_oxy.updated_at'])
         ->leftJoin('users','users.id','=','prefacturacion_oxy.responsable');

    }
    public function headings(): array
    {
        return [
            'ID',
            'Nit',
            'Cliente',
            'Periodo',
            'item de contrato',
            'Linea de negocio',
            'No de orden de servicio',
            'Detalle',
            'Ciudad',
            'Propuesta',
            'No Factura',
            'Fecha prefactura',
            'Hora de incio',
            'Hora de finalizacion',
            'Cantidad',
            'Fecha de servicio',
            'Valor unitario',
            'Valor total del servicio',
            'Centro de costos oxy',
            'Observacion',
            'Estado de facturacion',
            'Fecha factura',
            'Valor Facturado',
            'Obervaciones',
            'Responsable',
            'Factura proveedor',
            'Fecha created',
            'Fecha updated'
            
        ];
    }
}
