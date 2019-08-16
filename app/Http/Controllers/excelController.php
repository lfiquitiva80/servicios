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
  use App\controlhorario;
  use App\User;
  use Alert;
  use Excel;


  class excelController extends Controller
  {




  public function excelordenes($type)
  {


    $index = DB::table('ordenesdeservicio')
    ->join('estadoservicio', 'estadoservicio.id', '=', 'ordenesdeservicio.estadoservicio_id')
    ->join('escolta', 'escolta.id', '=', 'ordenesdeservicio.Escolta_asignado')
    ->join('vehiculo', 'vehiculo.id', '=', 'ordenesdeservicio.placa')
    ->join('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
    ->join('tipodevehiculo', 'tipodevehiculo.id', '=', 'ordenesdeservicio.tipo')
    ->join('users', 'users.id', '=', 'ordenesdeservicio.users_id')
    ->join('tiposervicio', 'tiposervicio.id', '=', 'ordenesdeservicio.tipo_de_servicio')
    ->join('solicitanteinterno', 'solicitanteinterno.id', '=', 'ordenesdeservicio.solicitante_interno')
    ->select('ordenesdeservicio.*', 'estadoservicio.*', 'vehiculo.*', 'solicitanteinterno.*', 'cliente.*', 'tiposervicio.*', 'tipodevehiculo.*', 'users.*', 'escolta.*')
    ->get();

      //dd($index);

            //ob_end_clean();  


    \Excel::create('ordenesdeservicio', function($excel)use ($index) {
      $excel->sheet('ordenesdeservicio', function($sheet) use ($index){
              //$products=eventos_general::all();
         //dd($products);
              //$sheet->fromArray($index);
       $sheet->loadView('excel.ordenesdeservicio', ['index' => $index]);
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


    $index = servicios_adicionales_occidental::all();

    return \Excel::create('occidental', function($excel) use ($index) {

      $excel->sheet('sheet name', function($sheet) use ($index)

      {

        $sheet->fromArray($index);

      });

    })->download($type);


  }


  public function index()
  {

    $estadoservicio = estadoservicio::pluck('estadoservicio','id');

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



  public function controlhorario()

  {
  $index = DB::table('controlhorario')
  ->join('escolta', 'escolta.id', '=', 'controlhorario.escolta_id')
  ->join('estadocontrolhorario', 'estadocontrolhorario.id', '=', 'controlhorario.estadocontrol')
  ->select('escolta.*', 'estadocontrolhorario.*' ,'controlhorario.*')
  ->whereYear('Fecha_Registro', '2019')
  ->get();

     //dd($index);



  \Excel::create('Control Horario', function($excel)use ($index) {
    $excel->sheet('Control Horario', function($sheet) use ($index){
              //$products=eventos_general::all();
         //dd($products);
     $sheet->loadView('excel.controlhorario', ['index' => $index]);
   });
  })->export('csv');

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


  public function  jsonordenes(){

  $data = DB::table('ordenesdeservicio')
  ->join('estadoservicio', 'estadoservicio.id', '=', 'ordenesdeservicio.estadoservicio_id')
  ->join('escolta', 'escolta.id', '=', 'ordenesdeservicio.Escolta_asignado')
  ->join('vehiculo', 'vehiculo.id', '=', 'ordenesdeservicio.placa')
  ->join('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
  ->join('tipodevehiculo', 'tipodevehiculo.id', '=', 'ordenesdeservicio.tipo')
  ->join('users', 'users.id', '=', 'ordenesdeservicio.users_id')
  ->join('tiposervicio', 'tiposervicio.id', '=', 'ordenesdeservicio.tipo_de_servicio')
  ->join('solicitanteinterno', 'solicitanteinterno.id', '=', 'ordenesdeservicio.solicitante_interno')
  ->select('ordenesdeservicio.*', 'estadoservicio.*', 'vehiculo.*', 'solicitanteinterno.*', 'cliente.*', 'tiposervicio.*', 'tipodevehiculo.*', 'users.*', 'escolta.*')
  ->get();


  return response()->json($data);
  }


  public function rango(Request $request){


  $index = DB::table('ordenesdeservicio')
  ->join('estadoservicio', 'estadoservicio.id', '=', 'ordenesdeservicio.estadoservicio_id')
  ->join('escolta', 'escolta.id', '=', 'ordenesdeservicio.Escolta_asignado')
  ->join('vehiculo', 'vehiculo.id', '=', 'ordenesdeservicio.placa')
  ->join('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
  ->join('tipodevehiculo', 'tipodevehiculo.id', '=', 'ordenesdeservicio.tipo')
  ->join('users', 'users.id', '=', 'ordenesdeservicio.users_id')
  ->join('tiposervicio', 'tiposervicio.id', '=', 'ordenesdeservicio.tipo_de_servicio')
  ->join('solicitanteinterno', 'solicitanteinterno.id', '=', 'ordenesdeservicio.solicitante_interno')
  ->select('ordenesdeservicio.*', 'estadoservicio.*', 'vehiculo.*', 'solicitanteinterno.*', 'cliente.*', 'tiposervicio.*', 'tipodevehiculo.*', 'users.*', 'escolta.*')
  ->whereBetween('fecha_inicio_servicio',[$request->fecha1,$request->fecha2])
  ->get();

      //dd($index);



  \Excel::create('ordenesdeservicio', function($excel)use ($index) {
    $excel->sheet('ordenesdeservicio', function($sheet) use ($index){
              //$products=eventos_general::all();
         //dd($products);
     $sheet->loadView('excel.ordenesdeservicio', ['index' => $index]);
   });
  })->export('xlsx'); 

  }


  public function consultacliente(Request $request){


  $index = DB::table('ordenesdeservicio')
  ->join('estadoservicio', 'estadoservicio.id', '=', 'ordenesdeservicio.estadoservicio_id')
  ->join('escolta', 'escolta.id', '=', 'ordenesdeservicio.Escolta_asignado')
  ->join('vehiculo', 'vehiculo.id', '=', 'ordenesdeservicio.placa')
  ->join('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
  ->join('tipodevehiculo', 'tipodevehiculo.id', '=', 'ordenesdeservicio.tipo')
  ->join('users', 'users.id', '=', 'ordenesdeservicio.users_id')
  ->join('tiposervicio', 'tiposervicio.id', '=', 'ordenesdeservicio.tipo_de_servicio')
  ->join('solicitanteinterno', 'solicitanteinterno.id', '=', 'ordenesdeservicio.solicitante_interno')
  ->select('ordenesdeservicio.*', 'estadoservicio.*', 'vehiculo.*', 'solicitanteinterno.*', 'cliente.*', 'tiposervicio.*', 'tipodevehiculo.*', 'users.*', 'escolta.*')
  ->where('cliente',[$request->cliente])
  ->where('estadoservicio_id','LIKE' , "%$request->estadoservicio%")
  ->get();

      //dd($index);



  \Excel::create('ordenesdeservicio', function($excel)use ($index) {
    $excel->sheet('ordenesdeservicio', function($sheet) use ($index){
              //$products=eventos_general::all();
         //dd($products);
     $sheet->loadView('excel.ordenesdeservicio', ['index' => $index]);
   });
  })->export('xlsx'); 



  }




  }
