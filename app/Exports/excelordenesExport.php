<?php

namespace App\Exports;

use App\ordenesdeservicio;
//use Maatwebsite\Excel\Concerns\Exportable;
//use Maatwebsite\Excel\Concerns\FromQuery;
//use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
//use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Queue\ShouldQueue;





class excelordenesExport implements FromView//Responsable
{
    //use Exportable;
    
    //private $fileName = 'invoices.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function view(): View
    {


    $index = \DB::table('ordenesdeservicio')
            ->join('estadoservicio', 'estadoservicio.id', '=', 'ordenesdeservicio.estadoservicio_id')
            ->join('escolta', 'escolta.id', '=', 'ordenesdeservicio.Escolta_asignado')
            ->join('vehiculo', 'vehiculo.id', '=', 'ordenesdeservicio.placa')
            ->join('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
            ->join('tipodevehiculo', 'tipodevehiculo.id', '=', 'ordenesdeservicio.tipo')
            ->join('users', 'users.id', '=', 'ordenesdeservicio.users_id')
            ->join('tiposervicio', 'tiposervicio.id', '=', 'ordenesdeservicio.tipo_de_servicio')
            ->join('solicitanteinterno', 'solicitanteinterno.id', '=', 'ordenesdeservicio.solicitante_interno')
            ->select('ordenesdeservicio.*', 'estadoservicio.*', 'vehiculo.*', 'solicitanteinterno.*', 'cliente.*', 'tiposervicio.*', 'tipodevehiculo.*', 'users.*', 'escolta.*', 'cliente.nombre as nombrecliente')
            ->get();
            //dd($index);

        return view('excel.ordenesdeservicio', [
            'index' => $index
        ]);


}

}