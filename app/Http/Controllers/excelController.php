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

use App\Jobs\Ordenesdeservcio;


use App\Exports\excelordenesExport;
use App\Exports\controlhorarioExport;
use Illuminate\Support\Facades\Storage;
use App\Exports\ProveedorExport;
use App\Exports\PucExport;
use App\Exports\CentrodecostosExport;
use App\Exports\OtExport;
use App\Exports\LineadenegocioExport;
use App\Exports\ProvisionExport;
use App\Exports\MesprovisionExport;
use App\Exports\AnticipoExport;
use App\Exports\VehiculoExport;
use App\Exports\ClienteExport;
use App\Exports\EscoltaExport;
use App\Exports\RentadoraExport;
use App\Exports\TarifabarrancaExport;
use App\Exports\TarifabogotaExport;
use App\Exports\PrefacturaoxyExport;
use App\Exports\tarifarioExport;
use App\Exports\HoraadicionalExport;
use App\Exports\TipodetarifaExport;
use App\Exports\PropuestaeconomicaExport;
use App\Exports\FsExport;
use App\Exports\CodigociudadExport;
use App\Exports\PrefacturaclienteExport;
use App\Exports\consultaclienteExport;
use App\Exports\CalendarioprefacturaExport;
use App\Exports\RangordenesdeservicioExport;
use App\Exports\documentoExport;


class excelController extends Controller //implements ShouldQueue
{
  
   //use  InteractsWithQueue, Queueable, SerializesModels;
   

  public function excelordenes() 
  {

    Ordenesdeservcio::dispatch();
    return redirect()->route('reportes.index');
  }


  public function excelordenesservicios($type)
  {


  }


  public function excelordenesoccidental()
  {

    Ordenesdeservcio::dispatch();

    return redirect()->route('reportes.index');

  }


  public function index()
  {

    $exists = Storage::disk('local')->exists('public/OrdenesDeServcio.xlsx');
    if($exists =='true'){ 
     $segundos = 2;
     header("Refresh:".$segundos);
       //$pathToFile= Storage::disk('local')->get("OrdenesDeServcio.xlsx");
     $path = storage_path('app\public\OrdenesDeServcio.xlsx');
     return response()->download($path)->deleteFileAfterSend(true);
   }




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



public function controlhorario(Request $request)

{
  
  return \Excel::download(new controlhorarioExport($request->fecha3,$request->fecha4), 'controlhorario.xlsx');

}


public function clientegeneral(ClienteExport $ClienteExport)  {
  return $ClienteExport;

}
public function escoltasgeneral(EscoltaExport $EscoltaExport)  {
  return  $EscoltaExport;

}
public function vehiculosgeneral(VehiculoExport $VehiculoExport) 
{
  return  $VehiculoExport;

}
public function rentadorasgeneral(RentadoraExport $RentadoraExport)  {
 return $RentadoraExport;
}


public function rango(Request $request){

 $data = Carbon::createFromFormat('Y-m-d', $request->fecha1)->toDateString();
 $data2 = Carbon::createFromFormat('Y-m-d', $request->fecha2)->addDays(1)->toDateString();

 return (new RangordenesdeservicioExport ($data,$data2))->download('Ordenesdeservicio.xlsx');

}

public function proveedor(ProveedorExport $ProveedorExport)
{
  return  $ProveedorExport;
}
public function  puc(PucExport $PucExport)
{
  return $PucExport;
}
public function centrodecostos(CentrodecostosExport $CentrodecostosExport)
{
  return $CentrodecostosExport;
}
public function ot(OtExport $OtExport)
{
  return $OtExport;
}
public function lineadenegocio(LineadenegocioExport $LineadenegocioExport)
{
  return $LineadenegocioExport;
}
public function provision(ProvisionExport $ProvisionExport)
{
 return $ProvisionExport;
}
public function mesprovision(Request $request)
{
 $fecha =$request->mes;
 return (new MesprovisionExport($fecha))->download('provision.xlsx');
}

public function anticipo(AnticipoExport $AnticipoExport)
{
  return $AnticipoExport;
}
public function tarifabarranca(TarifabarrancaExport $TarifabarrancaExport)
{
  return $TarifabarrancaExport;
}

public function tarifabogota(TarifabogotaExport $TarifabogotaExport)
{
  return $TarifabogotaExport;
}
public function prefacturaoxy (PrefacturaoxyExport $PrefacturaoxyExport)
{
  return $PrefacturaoxyExport;
}

public function tarifario (tarifarioExport $tarifarioExport)
{
  return $tarifarioExport;
}

public function horaadicional(HoraadicionalExport $HoraadicionalExport){
  return $HoraadicionalExport;
}

public function propuestaeconomica (PropuestaeconomicaExport $PropuestaeconomicaExport)
{
  return $PropuestaeconomicaExport;
}

public function fs(FsExport $FsExport)
{
  return $FsExport;
}

public function codigociudad(CodigociudadExport $CodigociudadExport)
{
  return $CodigociudadExport;
}

public function prefacturacliente(PrefacturaclienteExport $PrefacturaclienteExport)
{
  return $PrefacturaclienteExport;
}

    //excel que tengo en el reporte donde consulta por cliente y estado, se crea consultaclienteExport
public function consultacliente(Request $request){

 return new consultaclienteExport($request->cliente,$request->estadoservicio);
}

  public function calendario(CalendarioprefacturaExport $CalendarioprefacturaExport)
  {
    return $CalendarioprefacturaExport;
  }

  public function tipodetarifa(TipodetarifaExport $TipodetarifaExport)
  {
    return $TipodetarifaExport;
  }

     public function documentoexcel(documentoExport $documentoExport)
  {
    return $documentoExport;
  }

  
}

