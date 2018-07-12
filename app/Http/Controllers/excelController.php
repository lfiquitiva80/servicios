<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estadoservicio;
use App\ordenesdeservicio;
use App\wo;
use App\servicios_adicionales;
use App\servicios_adicionales_occidental;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Datatables;
use App\cliente;
use App\escolta;
use App\vehiculo;
use App\rentadora;
use Alert;


class excelController extends Controller
{




    public function excelordenes($type)
    {


        $index = ordenesdeservicio::all();

       return \Excel::create('ordenes_de_servicio', function($excel) use ($index) {

            $excel->sheet('sheet name', function($sheet) use ($index)

            {

                $sheet->fromArray($index);

            });

        })->download($type);


    }


      public function excelordenesservicios($type)
    {


        $index = servicios_adicionales::all();;

       return \Excel::create('servicios_adicionales', function($excel) use ($index) {

            $excel->sheet('sheet name', function($sheet) use ($index)

            {

                $sheet->fromArray($index);

            });

        })->download($type);


    }


      public function excelordenesoccidental($type)
    {


        $index = servicios_adicionales_occidental::all();;

       return \Excel::create('occidental', function($excel) use ($index) {

            $excel->sheet('sheet name', function($sheet) use ($index)

            {

                $sheet->fromArray($index);

            });

        })->download($type);


    }


  public function index()
    {
        return view('reportes.index');
    }


  public function escoltas_ordenes()

  {
         \Excel::create('ordenesgenerales', function($excel) {

            $excel->sheet('ordenesgenerales', function($sheet) {

                //$products = Product::all();
 $agenda = \DB::table('ordenesdeservicio')
                    ->join('cliente','cliente.id','=','ordenesdeservicio.cliente')
                    ->join('vehiculo','vehiculo.id','=','ordenesdeservicio.placa')
                    ->join('estadoservicio','estadoservicio.id','=','ordenesdeservicio.estadoservicio_id')
                    ->join('users','users.id','=','ordenesdeservicio.users_id')
                    ->get();

                    //dd($data);

                $sheet->loadView('excel.excelescoltas', ['agenda' => $agenda]);

            });
       })->export('xls');

  }



    public function wodos()

  {
      $index = wo::all();;

       return \Excel::create('wo', function($excel) use ($index) {

            $excel->sheet('swo', function($sheet) use ($index)

            {

                $sheet->fromArray($index);

            });

        })->download('xls');

  }





public function clientegeneral()  {
  \Excel::create('Clientes', function($excel) {

     $excel->sheet('Clientes', function($sheet) {

         $sheet->row(1, [
       'Nit', 'Nombre', 'Solicitante', 'Teléfono', 'Email' , 'Notas', 'Coordinador' , 'Activo']);
$sheet->cells('A1:I1', function($cells)
{
  
  });

   $Clientes = cliente::orderBy('id', 'DSC')->get();
     foreach ($Clientes as $Cliente) {
            $row = [];
            $row [0] = $Cliente->nit;
            $row [1] = $Cliente->nombre;
            $row [2] = $Cliente->solicitante;
            $row [3] = $Cliente->telefono;
            $row [4] = $Cliente->email;
            $row [5] = $Cliente->notas;
            $row [6] = $Cliente->coordinador;
            $row [7] = $Cliente->activo;
            $sheet->appendRow($row);
        }
           });
 })->export('xls');

}
public function escoltasgeneral()  {
  \Excel::create('Escoltas', function($excel) {

     $excel->sheet('Clientes', function($sheet) {

         $sheet->row(1, [
        'Nombre', 'Cédula de ciudadania', 'Teléfono', 'Cargo' , 'Activo', 'Ciudad' , 'Bilingüe','Escolta externo']);
$sheet->cells('A1:I1', function($cells)
{

  });

   $Escoltas = Escolta::orderBy('id', 'ASC')->get();
     foreach ($Escoltas as $Escolta) {
            $row = [];
            $row [0] = $Escolta->nombre;
            $row [1] = $Escolta->cc;
            $row [2] = $Escolta->telefono;
            $row [3] = $Escolta->cargo;
            $row [4] = $Escolta->activo;
            $row [5] = $Escolta->ciudad;
            $row [6] = $Escolta->bilingue;
            $row [7] = $Escolta->escolta_externo;
            $sheet->appendRow($row);
        }
           });
 })->export('xls');//vehiculosgeneral

}
public function vehiculosgeneral()  {
  \Excel::create('Vehiculos', function($excel) {

     $excel->sheet('Vehiculos', function($sheet) {

         $sheet->row(1, [
         'Placa', 'Rentadora', 'Tipo de renta' , 'Activo']);
$sheet->cells('A1:I1', function($cells)
{

  });

   $vehiculos = vehiculo::orderBy('id', 'ASC')->get();
     foreach ($vehiculos as $vehiculo) {
            $row = [];
            $row [1] = $vehiculo->placa;
            $row [2] = $vehiculo->rentadora;
            $row [3] = $vehiculo->tipo_de_renta;
            $row [4] = $vehiculo->activo;
            $sheet->appendRow($row);
        }
           });
 })->export('xls');//rentadorasgeneral
}
public function rentadorasgeneral()  {
  \Excel::create('Rentadoras', function($excel) {

     $excel->sheet('Rentadoras', function($sheet) {

         $sheet->row(1, [
         'Nombre', 'Contacto', 'Teléfono' , 'Email']);
$sheet->cells('A1:I1', function($cells)
{

  });

   $rentadoras = rentadora::orderBy('id', 'ASC')->get();
     foreach ($rentadoras as $rentadora) {
            $row = [];
            $row [1] = $rentadora->nombre;
            $row [2] = $rentadora->contacto;
            $row [3] = $rentadora->telefono;
            $row [4] = $rentadora->email;
            $sheet->appendRow($row);
        }
           });
 })->export('xls');//
}
}
