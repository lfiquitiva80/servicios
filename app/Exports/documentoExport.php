<?php

namespace App\Exports;

use App\documento;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class documentoExport implements FromQuery,Responsable,ShouldQueue,WithHeadings
{

	    use Exportable;
    private $fileName = 'documento.xlsx';
    /**
    * @return \Illuminate\Database\Query\Builder
    */
    public function query()
    {
        return documento::query()
        ->join('ordenesdeservicio', 'ordenesdeservicio.id', '=', 'documento.id_ordendeservicio')
        ->leftjoin('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
        ->leftjoin('escolta', 'escolta.id', '=', 'ordenesdeservicio.Escolta_asignado')
        ->leftjoin('estadoservicio', 'estadoservicio.id', '=', 'ordenesdeservicio.estadoservicio_id')

        ->select('ordenesdeservicio.*','estadoservicio.*','documento.*','cliente.*','escolta.nombre as NomEscolta');
        
    }


    public function headings(): array
    {   
        return [
				'id',
				'No_de_orden_de_servicio',
				'estadoservicio_id',
				'fecha_inicio_servicio',
				'fecha_final_servicio',
				'Hora_inicio_en_OT',
				'Hora_Final_en_OT',
				'Hora_Programada',
				'Hora_de_inicio_Servicio_cliente',
				'Hora_Final_del_Servicio_Cliente',
				'Total_Horas_del_Servicio',
				'Escolta_asignado',
				'cedula',
				'escolta_externo',
				'bilingue',
				'ID2',
				'placa',
				'tipo',
				'cliente',
				'vip',
				'solicitante_cliente',
				'solicitante_interno',
				'solicitante_interno2',
				'ciudad_origen',
				'ciudad_destino',
				'fecha_solicitud',
				'Fecha_de_respuesta_al_cliente',
				'tipo_de_servicio',
				'detalle_del_servicio',
				'novedades',
				'px',
				'armado',
				'tipo_renta',
				'Proveedor_vehiculo',
				'prefactura',
				'fecha_prefactura',
				'observaciones',
				'tiempo_rta_cliente',
				'tiempo_prefactura',
				'color_agenda',
				'propuesta_economica',
				'arma_id',
				'estado_facturacion',
				'anticipo',
				'created_at',
				'updated_at',
				'_method',
				'_token',
				'users_id',
				'ev_anticipo',
				'estadoservicio',
				'orden',
				'id_ordendeservicio',
				'hora_inicio_servicio',
				'inicio',
				'destino',
				'vuelo',
				'areolinea',
				'procedencia',
				'destino2',
				'hora',
				'persona_acompanante',
				'camioneta',
				'km_final',
				'km_inicio',
				'sedan',
				'motocicleta',
				'blindado',
				'convencional',
				'kilometro_recorrido',
				'otro',
				'instruccion_especial',
				'avantel',
				'otros',
				'celular',
				'hora_inicio_empresa',
				'hora_final_empresa',
				'hora_inicio_cliente',
				'hora_final_cliente',
				'servicio_cancelado_por',
				'fecha_hora',
				'cancelacion',
				'id_users',
				'nit',
				'nombre',
				'solicitante',
				'telefono',
				'email',
				'notas',
				'activo',
				'coordinador',
				'usuario',
				'id_centrodecostos',
				'NomEscolta'

        ];

    }
}
