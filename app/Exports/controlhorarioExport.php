<?php

namespace App\Exports;

use App\controlhorario;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class controlhorarioExport implements FromView,ShouldQueue
{
    
    use Exportable;

    /**
    * @return \Illuminate\Support\Collection

    */

      public function __construct($fecha3,$fecha4) 
    {
        $this->fecha3 = $fecha3;
        $this->fecha4 = $fecha4;
    
    }


       public function view(): View
    {

      $year= Carbon::now();
      //$mes= Carbon::now();
      //dd($year->year, $mes->month);

   $index = \DB::table('controlhorario')
  ->join('escolta', 'escolta.id', '=', 'controlhorario.escolta_id')
  ->join('estadocontrolhorario', 'estadocontrolhorario.id', '=', 'controlhorario.estadocontrol')
  ->leftjoin('ordenesdeservicio', 'ordenesdeservicio.id', '=', 'controlhorario.ordenesdeservicio_id')
  ->leftjoin('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
  ->leftjoin('centro_de_costos','centro_de_costos.id_cliente','=','ordenesdeservicio.cliente')
  ->select('escolta.*', 'estadocontrolhorario.*' ,'controlhorario.*','ordenesdeservicio.No_de_orden_de_servicio','cliente.nombre as NombreCliente','centro_de_costos.centro_de_costos','centro_de_costos.DescripcionCentro')
  ->whereBetween('Fecha_Registro', [$this->fecha3, $this->fecha4])
  ->orderBy('Fecha_Registro', 'DESC')
  //->take(10)
  ->get();

 

 //dd($index); 

        return view('excel.controlhorario', [

            'index' => $index           
            
        ]);
    }

}
