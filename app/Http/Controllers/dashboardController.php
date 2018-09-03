<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ordenesdeservicio;
use App\estadoservicio;
use App\wo;
use App\escolta;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Datatables;
use Alert;


class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


     //$ordenesdeservicio = ordenesdeservicio::all();
     $ordenesdeservicio = DB::table('ordenesdeservicio')->select('estadoservicio_id')->groupBy('estadoservicio_id')->get();

     //dd($ordenesdeservicio);
     $servicios_completados = ordenesdeservicio::where('estadoservicio_id',6);
     $usuarios= User::all();
     $escoltas= escolta::all();
     $ordenesdeservicios= ordenesdeservicio::all();
     $estadoservicio=  DB::table('ordenesdeservicio')->select('estadoservicio_id')->groupBy('estadoservicio_id')->get()->toArray();
     //dd($estadoservicio);

     $porcentaje=($servicios_completados->count()/$ordenesdeservicios->count())*100;

    $Recibido =ordenesdeservicio::where('estadoservicio_id','1')->count();
    $Propuesta =ordenesdeservicio::where('estadoservicio_id','2')->count();
    $Planeado=ordenesdeservicio::where('estadoservicio_id','3')->count();
    $Informado =ordenesdeservicio::where('estadoservicio_id','4')->count();
    $Ejecucion=ordenesdeservicio::where('estadoservicio_id','5')->count();
    $Ejecutado =ordenesdeservicio::where('estadoservicio_id','6')->count();
    $Cancelado =ordenesdeservicio::where('estadoservicio_id','7')->count();
    $Show=ordenesdeservicio::where('estadoservicio_id','8')->count();
    $Novedad =ordenesdeservicio::where('estadoservicio_id','9')->count();

$suma= $Recibido + $Propuesta + $Planeado +$Informado + $Ejecucion + $Ejecutado + $Cancelado +$Show +$Novedad ;
$denominador1 = $Recibido / $suma;
$denominador2 = $Propuesta / $suma;
$denominador3 = $Planeado / $suma;
$denominador4 = $Informado / $suma;
$denominador5 = $Ejecucion / $suma;
$denominador6 = $Ejecutado / $suma;
$denominador7 = $Cancelado / $suma;
$denominador8 = $Show / $suma;
$denominador9= $Novedad / $suma;

$datos1 = $denominador1* 100;
$datos2 =$denominador2* 100;
$datos3 =$denominador3* 100;
$datos4 =$denominador4* 100;
$datos5 = $denominador5* 100;
$datos6 = $denominador6* 100;
$datos7 =$denominador7* 100;
$datos8 =$denominador8* 100;
$datos9 =$denominador9* 100;
// 2018
$Enero = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '01')->where('estadoservicio_id','6')->count();
$Enero2 = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '01')->where('estadoservicio_id','!=','6')->count();

$Febrero =DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '02')->where('estadoservicio_id','6')->count();
$Febrero2 =DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '02')->where('estadoservicio_id','!=','6')->count();

$Marzo = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '03')->where('estadoservicio_id','6')->count();
$Marzo2 =  DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '03')->where('estadoservicio_id','!=','6')->count();

$Abril = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '04')->where('estadoservicio_id','6')->count();
$Abril2 = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '04')->where('estadoservicio_id','!=','6')->count();

$Mayo = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '05')->where('estadoservicio_id','6')->count();
$Mayo2= DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '05')->where('estadoservicio_id','!=','6')->count();

$Junio = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '06')->where('estadoservicio_id','6')->count();
$Junio2 = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '06')->where('estadoservicio_id','!=','6')->count();

$Julio = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '07')->where('estadoservicio_id','6')->count();
$Julio2 = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '07')->where('estadoservicio_id','!=','6')->count();

$Agosto = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '08')->where('estadoservicio_id','6')->count();
$Agosto2 = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '08')->where('estadoservicio_id','!=','6')->count();

$Sept = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '09')->where('estadoservicio_id','6')->count();
$Sept2 = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '09')->where('estadoservicio_id','!=','6')->count();

$Oct = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '10')->where('estadoservicio_id','6')->count();
$Oct2 = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '10')->where('estadoservicio_id','!=','6')->count();

$Nov = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '11')->where('estadoservicio_id','6')->count();
$Nov2= DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '11')->where('estadoservicio_id','!=','6')->count();

$Dic = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '12')->where('estadoservicio_id','6')->count();
$Dic2 = DB::table('ordenesdeservicio')->whereYear('fecha_inicio_servicio', '2018')->whereMonth('fecha_inicio_servicio', '12')->where('estadoservicio_id','!=','6')->count();
    $chartjs = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 200, 'height' => 100])
        ->labels(['Recibido','Propuesta','Planeado','Informado','Ejecucion','Completados','Cancelado','Show','Novedad'])
        ->datasets([
            [
                'backgroundColor' => ['#FF6384', '#36A2EB','#5858FA','#58FAF4','#81F781','#F4FA58','#848484','#FE9A2E'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB','#5858FA','#58FAF4','#81F781','#F4FA58','#848484','#FE9A2E'],
                'data' => [$Recibido, $Propuesta, $Planeado,$Informado,$Ejecucion, $Ejecutado,$Cancelado,$Show,$Novedad]
            ]
        ])
        ->options([]);


      $chartjs4 = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Sin Terminar', 'Completado'])
        ->datasets([
            [
                'backgroundColor' => ['#FF6384', '#36A2EB'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                'data' => [20,30]
            ]
        ])
        ->options([]);

        $chartjs2 = app()->chartjs
         ->name('barChartTest')
         ->type('bar')
         ->size(['width' => 400, 'height' => 200])
         ->labels(['Servicios terminados'])
         ->datasets([
             [
                 "label" => "Enero",
                 'backgroundColor' => ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                 'data' => [$Enero],
             ],
             [
                 "label" => "Febrero",
                 'backgroundColor' => ['rgba(194, 241, 232 )', 'rgba( 194, 241, 232 )'],
                 'data' => [$Febrero]
             ],
             [
                 "label" => "Marzo",
                 'backgroundColor' => ['rgba(191, 201, 202 )', 'rgba(191, 201, 202 )'],
                 'data' => [$Marzo]
             ],
             [
                 "label" => "Abril",
                 'backgroundColor' => ['rgba(133, 193, 233 )', 'rgba(133, 193, 233 )'],
                 'data' => [$Abril]
             ],
             [
                 "label" => "Mayo",
                 'backgroundColor' => ['rgba(174, 182, 191 )', 'rgba(174, 182, 191 )'],
                 'data' => [$Mayo]
             ],
             [
                 "label" => "Junio",
                 'backgroundColor' => ['rgba(187, 143, 206)', 'rgba(187, 143, 206)'],
                 'data' => [$Junio]
             ],
             [
                 "label" => "Julio",
                 'backgroundColor' => ['rgba(183, 149, 11 )', 'rgba(183, 149, 11 )'],
                 'data' => [$Julio]
             ],
             [
                 "label" => "Agosto",
                 'backgroundColor' => ['rgba(236, 50, 41 )', 'rgba(236, 50, 41 )'],
                 'data' => [$Agosto]
             ],
             [
                 "label" => "Septiembre",
                 'backgroundColor' => ['rgba(56, 236, 41)', 'rgba(56, 236, 41 )'],
                 'data' => [$Sept]
             ],
             [
                 "label" => "Octubre",
                 'backgroundColor' => ['rgba(41, 50, 236 )', 'rgba(41, 50, 236 )'],
                 'data' => [$Oct]
             ],
             [
                 "label" => "Noviembre",
                 'backgroundColor' => ['rgba(165, 205, 206)', 'rgba( 165, 205, 206 )'],
                 'data' => [$Nov]
             ],
             [
                 "label" => "Diciembre",
                 'backgroundColor' => ['rgba( 146, 148, 148)', 'rgba( 146, 148, 148 )'],
                 'data' => [$Dic]
             ],
         ])
         ->options([]);

         $chartjs3 = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
        ->datasets([
            [
                "label" => "Completados",
                'backgroundColor' => "rgba(255, 255, 0, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [$Enero, $Febrero, $Marzo, $Abril, $Mayo, $Junio, $Julio,$Agosto,$Sept,$Oct,$Nov,$Dic],
            ],
            [
                "label" => "Otros",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [$Enero2,$Febrero2,$Marzo2,$Abril2,$Mayo2,$Junio2,$Julio2,$Agosto2,$Sept2,$Oct2,$Nov2,$Dic2],
            ]
        ])
        ->options([]);





    return view('dashboard', compact('chartjs','chartjs2','chartjs3','usuarios','chartjs4','escoltas','ordenesdeservicios','porcentaje','datos1','datos2','datos3','datos4','datos5','datos6','datos7','datos8','datos9','Recibido','Propuesta','Planeado','Informado','Ejecucion','Ejecutado','Cancelado','Show','Novedad'));



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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
