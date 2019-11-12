<?php

namespace App\Exports;

use App\ordenesdeservicio;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RangordenesdeservicioExport implements FromView,ShouldQueue
{
  use Exportable;
     public function __construct($data,$data2)
     {
        $this->data = $data;
        $this->data2 = $data2;

     }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
       $index =ordenesdeservicio::
            whereBetween('fecha_inicio_servicio', [$this->data, $this->data2])
           ->join('estadoservicio', 'estadoservicio.id', '=', 'ordenesdeservicio.estadoservicio_id')
           ->join('escolta', 'escolta.id', '=', 'ordenesdeservicio.Escolta_asignado')
           ->join('vehiculo', 'vehiculo.id', '=', 'ordenesdeservicio.placa')
           ->join('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
           ->join('users', 'users.id', '=', 'ordenesdeservicio.users_id')
           ->select('ordenesdeservicio.*', 'estadoservicio.*', 'vehiculo.*', 'solicitanteinterno.*', 'cliente.*', 'tiposervicio.*', 'tipodevehiculo.*', 'users.*', 'escolta.*','cliente.nombre as nombrecliente')
           ->leftjoin('tiposervicio', 'tiposervicio.id', '=', 'ordenesdeservicio.tipo_de_servicio')
           ->leftjoin('solicitanteinterno', 'solicitanteinterno.id', '=', 'ordenesdeservicio.solicitante_interno')
           ->leftjoin('tipodevehiculo', 'tipodevehiculo.id', '=', 'ordenesdeservicio.tipo') 
           ->get();
           return view('excel.ordenesdeservicio', [
             'index' => $index
         ]);
    }
}
