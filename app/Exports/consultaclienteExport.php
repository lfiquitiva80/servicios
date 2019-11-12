<?php

namespace App\Exports;

//use Maatwebsite\Excel\Concerns\FromCollection;
//use App\cliente;
//use Illuminate\Contracts\View\View;
//use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class consultaclienteExport implements FromCollection,Responsable,ShouldQueue,WithHeadings
{


    use Exportable;
    private $fileName = 'ConsultaCliente2.xlsx';


      public function __construct($cliente, $estadoservicio) 
    {
        $this->cliente = $cliente;
        $this->estadoservicio = $estadoservicio;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
 public function collection()
    {

return $index = \DB::table('ordenesdeservicio')
  ->join('estadoservicio', 'estadoservicio.id', '=', 'ordenesdeservicio.estadoservicio_id')
  ->join('escolta', 'escolta.id', '=', 'ordenesdeservicio.Escolta_asignado')
  ->join('vehiculo', 'vehiculo.id', '=', 'ordenesdeservicio.placa')
  ->join('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
  ->join('tipodevehiculo', 'tipodevehiculo.id', '=', 'ordenesdeservicio.tipo')
  ->join('users', 'users.id', '=', 'ordenesdeservicio.users_id')
  ->join('tiposervicio', 'tiposervicio.id', '=', 'ordenesdeservicio.tipo_de_servicio')
  ->join('solicitanteinterno', 'solicitanteinterno.id', '=', 'ordenesdeservicio.solicitante_interno')
  ->select('ordenesdeservicio.*', 'cliente.*', 'estadoservicio.*','vehiculo.*', 'solicitanteinterno.*','tiposervicio.*', 'tipodevehiculo.*', 'users.*', 'escolta.*', 'escolta.nombre as nombreescolta','cliente.nombre as nombrecliente')
  ->where('cliente',[$this->cliente])
  ->where('estadoservicio_id','LIKE' , "%$this->estadoservicio%")
  ->get();
  //dd($index);
}
 
   public function headings(): array
    {
        return [
            'id',
'No_de_orden_de_servicio',
'estadoservicio_id',
'fecha_inicio_servicio',
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
'created_at',
'updated_at',
'_method',
'_token',
'users_id',
'fecha_final_servicio',
'arma_id',
'estado_facturacion',
'anticipo',
'ev_anticipo',
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
'estadoservicio',
'orden',
'foto',
'rentadora',
'id_proveedor',
'tipo_de_renta',
'armadura',
'descripcion',
'color',
'fecha_soat',
'documento_soat',
'fecha_licencia',
'documento_licencia',
'fecha_poliza',
'documento_poliza',
'fecha_tecnomecanica',
'documento_tecnomecanica',
'documento_blindaje',
'evento_uno',
'evento_dos',
'evento_tres',
'evento_cuatro',
'descripcion_solicitante',
'desc_tipo_serv',
'descripcion_tipo_vehiculo',
'name',
'password',
'type',
'remember_token',
'cc',
'cargo',
'ciudad',
'nombreescolta',
'nombrecliente'

        ];

        
    }

      
}
