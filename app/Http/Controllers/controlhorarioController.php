<?php

namespace App\Http\Controllers;

use App\controlhorario;
use App\escolta;
use App\ordenesdeservicio;
use App\estadoservicio;
use App\wo;
use App\cliente;
use App\vehiculo;
use App\User;
use App\tipodevehiculo;
use App\tiposervicio;
use App\estadocontrolhorario;
use App\solicitanteinterno;
use App\Mail\servicioadd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Datatables;
use Alert;
use PDF;
use App\Notifications\notificacionservicio;

class controlhorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $controlhorario = controlhorario::search($request->nombre,$request->fechahorario,$request->fechahorariofinal)->orderBy('Fecha_Registro')->paginate(50);
      $escolta = escolta::orderBy('nombre','ASC')->pluck('nombre','id');
      $estadocontrolhorario = estadocontrolhorario::where('id','!=',7)->pluck('estadocontrol','id');
      $wo = wo::pluck('id','id');
      $ordenesdeservicio = ordenesdeservicio::orderBy('No_de_orden_de_servicio','ASC')->pluck('No_de_orden_de_servicio','id');
      $usuario = User::pluck('name','id');
   return view('controlhorario.index',compact('controlhorario','escolta','estadocontrolhorario','wo','ordenesdeservicio','usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request-> all()); 
      $controlhorario =  new controlhorario($request-> all());
      $controlhorario->save();
  Alert::success('', 'el controlhorario ha sido registrado con exito !')->persistent('Close');
  return redirect()->route('controlhorario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $controlhorario = controlhorario::find($id);
        return view('controlhorario.edit',compact('$controlhorario'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
      $controlhorario = controlhorario::findOrFail($request->id);
 $controlhorario->update($request->all());
        Alert::success('Good job!');
      Alert::success('', 'el controlhorario ha sido editado con exito !')->persistent('Close');
      return back(); 
      //redirect()->route('controlhorario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $controlhorario = controlhorario::find($id);
          $controlhorario->delete();
            Alert::success('', 'el controlhorario ha sido sido borrado de forma exita!')->persistent('Close');
            return redirect()->route('controlhorario.index');
    }

    public function ocupacion(Request $request)
    {
              
                //dd($request->all());
        $mes = $request->input('mes');
        $year = 2019;

        $Servicios=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->where('estadocontrol',2)->get()->count();

        $disponibles=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->where('estadocontrol','!=',2)->get()->count();

        //dd($Servicios,$disponibles);

$Uno=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '1')->where('estadocontrol',2)->get()->count();
$Dos=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '2')->where('estadocontrol',2)->get()->count();
$Tres=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '3')->where('estadocontrol',2)->get()->count();
$Cuatro=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '4')->where('estadocontrol',2)->get()->count();
$Cinco=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '5')->where('estadocontrol',2)->get()->count();
$Seis=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '6')->where('estadocontrol',2)->get()->count();
$Siete=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '7')->where('estadocontrol',2)->get()->count();
$Ocho=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '8')->where('estadocontrol',2)->get()->count();
$Nueve=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '9')->where('estadocontrol',2)->get()->count();
$Diez=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '10')->where('estadocontrol',2)->get()->count();
$Once=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '11')->where('estadocontrol',2)->get()->count();
$Doce=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '12')->where('estadocontrol',2)->get()->count();
$Trece=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '13')->where('estadocontrol',2)->get()->count();
$Catorce=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '14')->where('estadocontrol',2)->get()->count();
$Quince=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '15')->where('estadocontrol',2)->get()->count();
$Dieciséis=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '16')->where('estadocontrol',2)->get()->count();
$Diecisiete=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '17')->where('estadocontrol',2)->get()->count();
$Dieciocho=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '18')->where('estadocontrol',2)->get()->count();
$Diecinueve=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '19')->where('estadocontrol',2)->get()->count();
$Veinte=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '20')->where('estadocontrol',2)->get()->count();
$Veintiuno=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '21')->where('estadocontrol',2)->get()->count();
$Veintidós=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '22')->where('estadocontrol',2)->get()->count();
$Veintitrés=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '23')->where('estadocontrol',2)->get()->count();
$Veinticuatro=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '24')->where('estadocontrol',2)->get()->count();
$Veinticinco=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '25')->where('estadocontrol',2)->get()->count();
$Veintiséis=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '26')->where('estadocontrol',2)->get()->count();
$Veintisiete=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '27')->where('estadocontrol',2)->get()->count();
$Veintiocho=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '28')->where('estadocontrol',2)->get()->count();
$Veintinueve=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '29')->where('estadocontrol',2)->get()->count();
$Treinta=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '30')->where('estadocontrol',2)->get()->count();
$Treintayuno=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '31')->where('estadocontrol',2)->get()->count();

$aUno=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '1')->where('estadocontrol','!=',2)->get()->count();
$aDos=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '2')->where('estadocontrol','!=',2)->get()->count();
$aTres=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '3')->where('estadocontrol','!=',2)->get()->count();
$aCuatro=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '4')->where('estadocontrol','!=',2)->get()->count();
$aCinco=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '5')->where('estadocontrol','!=',2)->get()->count();
$aSeis=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '6')->where('estadocontrol','!=',2)->get()->count();
$aSiete=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '7')->where('estadocontrol','!=',2)->get()->count();
$aOcho=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '8')->where('estadocontrol','!=',2)->get()->count();
$aNueve=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '9')->where('estadocontrol','!=',2)->get()->count();
$aDiez=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '10')->where('estadocontrol','!=',2)->get()->count();
$aOnce=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '11')->where('estadocontrol','!=',2)->get()->count();
$aDoce=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '12')->where('estadocontrol','!=',2)->get()->count();
$aTrece=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '13')->where('estadocontrol','!=',2)->get()->count();
$aCatorce=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '14')->where('estadocontrol','!=',2)->get()->count();
$aQuince=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '15')->where('estadocontrol','!=',2)->get()->count();
$aDieciséis=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '16')->where('estadocontrol','!=',2)->get()->count();
$aDiecisiete=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '17')->where('estadocontrol','!=',2)->get()->count();
$aDieciocho=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '18')->where('estadocontrol','!=',2)->get()->count();
$aDiecinueve=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '19')->where('estadocontrol','!=',2)->get()->count();
$aVeinte=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '20')->where('estadocontrol','!=',2)->get()->count();
$aVeintiuno=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '21')->where('estadocontrol','!=',2)->get()->count();
$aVeintidós=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '22')->where('estadocontrol','!=',2)->get()->count();
$aVeintitrés=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '23')->where('estadocontrol','!=',2)->get()->count();
$aVeinticuatro=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '24')->where('estadocontrol','!=',2)->get()->count();
$aVeinticinco=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '25')->where('estadocontrol','!=',2)->get()->count();
$aVeintiséis=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '26')->where('estadocontrol','!=',2)->get()->count();
$aVeintisiete=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '27')->where('estadocontrol','!=',2)->get()->count();
$aVeintiocho=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '28')->where('estadocontrol','!=',2)->get()->count();
$aVeintinueve=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '29')->where('estadocontrol','!=',2)->get()->count();
$aTreinta=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '30')->where('estadocontrol','!=',2)->get()->count();
$aTreintayuno=DB::table('controlhorario')->whereMonth('Fecha_Registro', $mes) ->whereYear('Fecha_Registro', $year)->whereDay('Fecha_Registro', '31')->where('estadocontrol','!=',2)->get()->count();


        //grafico de torta
      $chartjs4 = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Disponibles', 'Servicio'])
        ->datasets([
            [
                'backgroundColor' => ['#FF6384', '#36A2EB'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                'data' => [$disponibles, $Servicios]
            ]
        ])
        ->options([]);

            //grafico de barras
        $chartjs2 = app()->chartjs
         ->name('barChartTest')
         ->type('bar')
         ->size(['width' => 400, 'height' => 200])
         ->labels(['Servicios terminados'])
         ->datasets([

                    
             [
                    
                 "label" => "1",
                 'backgroundColor' => ['rgba(207, 118, 63, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Uno],
                
             ],

              [
                    
                 "label" => "2",
                 'backgroundColor' => ['rgba(207, 190, 63, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Dos],
                
             ],
              [
                    
                 "label" => "3",
                 'backgroundColor' => ['rgba(8,79,26,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Tres],
                
             ],
            [                    
                 "label" => "4",
                 'backgroundColor' => ['rgba(19,89,51,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Cuatro],
                
             ],
[                    
                 "label" => "5",
                 'backgroundColor' => ['rgba(43,189,205,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Cinco],
                
             ],
[                    
                 "label" => "6",
                 'backgroundColor' => ['rgba(190,238,5,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Seis],
                
             ],
[                    
                 "label" => "7",
                 'backgroundColor' => ['rgba(240,126,227,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Siete],
                
             ],
[                    
                 "label" => "8",
                 'backgroundColor' => ['rgba(82,88,205,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Ocho],
                
             ],
[                    
                 "label" => "9",
                 'backgroundColor' => ['rgba(33,66,166,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Nueve],
                
             ],
[                    
                 "label" => "10",
                 'backgroundColor' => ['rgba(125,238,85,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Diez],
                
             ],
[                    
                 "label" => "11",
                 'backgroundColor' => ['rgba(115,239,192,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Once],
                
             ],
[                    
                 "label" => "12",
                 'backgroundColor' => ['rgba(86,234,148,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Doce],
                
             ],
[                    
                 "label" => "13",
                 'backgroundColor' => ['rgba(86,45,144,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Trece],
                
             ],
[                    
                 "label" => "14",
                 'backgroundColor' => ['rgba(7,36,190,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Catorce],
                
             ],
[                    
                 "label" => "15",
                 'backgroundColor' => ['rgba(255,149,84,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Quince],
                
             ],
[                    
                 "label" => "16",
                 'backgroundColor' => ['rgba(2,67,188,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Dieciséis],
                
             ],
[                    
                 "label" => "17",
                 'backgroundColor' => ['rgba(154,83,186,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Diecisiete],
                
             ],
[                    
                 "label" => "18",
                 'backgroundColor' => ['rgba(112,144,36,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Dieciocho],
                
             ],
[                    
                 "label" => "19",
                 'backgroundColor' => ['rgba(143,166,255,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Diecinueve],
                
             ],
[                    
                 "label" => "20",
                 'backgroundColor' => ['rgba(56,223,75,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Veinte],
                
             ],
[                    
                 "label" => "21",
                 'backgroundColor' => ['rgba(37,56,147,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Veintiuno],
                
             ],
[                    
                 "label" => "22",
                 'backgroundColor' => ['rgba(125,217,33,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Veintidós],
                
             ],
[                    
                 "label" => "23",
                 'backgroundColor' => ['rgba(171,51,11,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Veintitrés],
                
             ],
[                    
                 "label" => "24",
                 'backgroundColor' => ['rgba(16,124,104,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Veinticuatro],
                
             ],
[                    
                 "label" => "25",
                 'backgroundColor' => ['rrgba(109,132,206,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Veinticinco],
                
             ],
[                    
                 "label" => "26",
                 'backgroundColor' => ['rgba(156,30,12,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Veintiséis],
                
             ],
[                    
                 "label" => "27",
                 'backgroundColor' => ['rgba(249,155,63,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Veintisiete],
                
             ],
[                    
                 "label" => "28",
                 'backgroundColor' => ['rgba(180,158,234,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Veintiocho],
                
             ],
[                    
                 "label" => "29",
                 'backgroundColor' => ['rgba(67,45,205,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Veintinueve],
                
             ],
[                    
                 "label" => "30",
                 'backgroundColor' => ['rgba(20,82,127,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Treinta],
                
             ],
[                    
                 "label" => "31",
                 'backgroundColor' => ['rgba(59,136,248,0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Treintayuno],
                
             ],    

             
         ])

         ->options([]);

         //Gráfico de Lineas
         $chartjs3 = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['1',  '2',    '3',    '4',    '5',    '6',    '7',    '8',    '9',    '10',   '11',   '12',   '13',   '14',   '15',   '16',   '17',   '18',   '19',   '20',   '21',   '22',   '23',   '24',   '25',   '26',   '27',   '28',   '29',   '30',   '31'
])
        ->datasets([
            [
                "label" => "Servicios",
                'backgroundColor' => "rgba(255, 255, 0, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [$Uno,    $Dos,   $Tres,  $Cuatro,    $Cinco, $Seis,  $Siete, $Ocho,  $Nueve, $Diez,  $Once,  $Doce,  $Trece, $Catorce,   $Quince,    $Dieciséis, $Diecisiete,    $Dieciocho, $Diecinueve,    $Veinte,    $Veintiuno, $Veintidós, $Veintitrés,    $Veinticuatro,  $Veinticinco,   $Veintiséis,    $Veintisiete,   $Veintiocho,    $Veintinueve,   $Treinta,   $Treintayuno
],
            ],
            [
                "label" => "Disponibles",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [$aUno,   $aDos,  $aTres, $aCuatro,   $aCinco,    $aSeis, $aSiete,    $aOcho, $aNueve,    $aDiez, $aOnce, $aDoce, $aTrece,    $aCatorce,  $aQuince,   $aDieciséis,    $aDiecisiete,   $aDieciocho,    $aDiecinueve,   $aVeinte,   $aVeintiuno,    $aVeintidós,    $aVeintitrés,   $aVeinticuatro, $aVeinticinco,  $aVeintiséis,   $aVeintisiete,  $aVeintiocho,   $aVeintinueve,  $aTreinta,  $aTreintayuno
],
            ]
        ])
        ->options([]);





    return view('controlhorario.ocupacion', compact('chartjs','chartjs2','chartjs3','usuarios','chartjs4','escoltas','ordenesdeservicios','porcentaje','datos1','datos2','datos3','datos4','datos5','datos6','datos7','datos8','datos9','Recibido','Propuesta','Planeado','Informado','Ejecucion','Ejecutado','Cancelado','Show','Novedad'));
         
           
    }


     public function json_ocupacion(Request $request)
    {
         //$controlhorario = controlhorario::all();

       $controlhorario = DB::table('controlhorario')
                    ->first();

         //dd($controlhorario);

    return response()->json($controlhorario);
    //return view('controlhorario.ocupacion',compact('controlhorario'));
         
           
    }


     public function horarios($id)
    {
         
      $edit= ordenesdeservicio::findOrFail($id);
      $edit2=ordenesdeservicio::where('No_de_orden_de_servicio',$edit->No_de_orden_de_servicio)
      ->select('id')
      ->get();
      //dd($edit2->toArray());

      $controlhorario = controlhorario::orderBy('Fecha_Registro', 'desc')
      ->whereIn('wo_id', [$edit2->toArray()])                                                                                                                
      //->Where('escolta_id', $edit->Escolta_asignado)
      ->paginate(50);
      //dd($controlhorario);
      $escolta = escolta::orderBy('nombre','ASC')->where('activo','si')->pluck('nombre','id');
      $estadocontrolhorario = estadocontrolhorario::pluck('estadocontrol','id');
      $wo = wo::pluck('id','id');

      return view('controlhorario.horarios',compact('controlhorario','escolta','estadocontrolhorario','wo','disponibles','Servicios'));
         
           
    }



}
