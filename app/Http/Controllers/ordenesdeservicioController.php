<?php

namespace App\Http\Controllers;

use App\ordenesdeservicio;
use App\estadoservicio;
use App\wo;
use App\escolta;
use App\cliente;
use App\vehiculo;
use App\User;
use App\tipodevehiculo;
use App\tiposervicio;
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
use App\Mail\anticipo;
use App\estadofacturacion;






class ordenesdeservicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info('Ingreso a las ordenes de servicio: '. Auth::user()->name);

        $index = DB::table('ordenesdeservicio')->paginate();

        //dd($index);


        //return \Datatables::of(empleado::all())->make(true);

        return view('ordenesdeservicio.index',compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $index = DB::table('ordenesdeservicio')->paginate();
        $estadoservicio = estadoservicio::pluck('estadoservicio','id');
        //  $escolta = escolta::pluck('nompbre','nombre');
         $escola = $escolta = DB::table('escolta')
         ->where('activo','si')
         ->orderBy('nombre','asc')
         ->pluck('nombre', 'nombre');

        //dd($index);
        return view('ordenesdeservicio.create', compact('estadoservicio','escolta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $input = $request->all();
       //dd($input);

            $store=ordenesdeservicio::create($input);

            $idwo =  $request->id;

            $wo=wo::create();
            $wo->descripcion_wo = "N° de Orden ". $wo->id;
            $wo->save();
            $store->No_de_orden_de_servicio = $wo->id;
            $store->save();

       Log::info('Se creo una orden de servicio el usuario '. Auth::user()->name);         
       Alert::success('Se guardo correctamente el nuevo servicio!')->persistent("Close");

     //  \Mail::to($request->get('para'))->send(new part($order));
       try {
        \Mail::to('planeacioncc@omnitempus.com')->send(new servicioadd($store));
        Log::info('Se envio con exito el correo'); 
       } catch (Exception $e) {
           Alert::success('Se guardo correctamente el nuevo servicio!')->persistent("Close");
       }
   

        return redirect()->route('home-principal');
        //return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ordenesdeservicio  $ordenesdeservicio
     * @return \Illuminate\Http\Response
     */
    public function show(ordenesdeservicio $ordenesdeservicio)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ordenesdeservicio  $ordenesdeservicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $edit= ordenesdeservicio::findOrFail($id);
         //dd($edit);
         $estadoservicio = estadoservicio::orderBy('orden','ASC')->pluck('estadoservicio','id');
        //  $escola = $escolta = DB::table('escolta')
        //  ->where('activo','si')
        //  ->orderBy('nombre','ASC')
        //  ->pluck('nombre', 'id');
        $escolta = escolta::orderBy('nombre','ASC')->pluck('nombre','id');
        $cliente = cliente::orderBy('Nombre','ASC')->pluck('Nombre','id');
        $vehiculo = vehiculo::orderBy('placa','ASC')->pluck('placa','id');
        // $vehiculo  = DB::table('vehiculo')
        //  ->where('activo','si')
        //  ->orderBy('placa','ASC')
        //  ->pluck('placa', 'id');
         $tipodevehiculo = tipodevehiculo::pluck('descripcion_tipo_vehiculo','id');
         $tiposervicio = tiposervicio::orderBy('desc_tipo_serv','ASC')->pluck('desc_tipo_serv','id');
         $solicitanteinterno = solicitanteinterno::pluck('descripcion_solicitante','id');
         $wo= wo::pluck('descripcion_wo','id');
         $estadofacturacion = estadofacturacion::
                               where('id',1)
                              ->orWhere('id',2)
                              ->pluck('estado','id');
         Log::info('El usuario ingreso a editar el id => : '. $id.' '. Auth::user()->name);
        //dd($escolta);
         $email=User::find(1);

         
    //\Notification::send($email, new notificacionservicio($estadoservicio));
        return view('ordenesdeservicio.edit', compact('edit','estadoservicio','wo','cliente','escolta','vehiculo','tipodevehiculo','tiposervicio','solicitanteinterno','estadofacturacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ordenesdeservicio  $ordenesdeservicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->anticipo == 1) {
            $dts =ordenesdeservicio::find($request->id);
            if ($dts->ev_anticipo == 0) {
                 $dts->ev_anticipo = 1;  
                 $dts->save();  
                \Mail::to('ejemplo@pruebas.com')->send(new anticipo($request));
            }
                     
        }
       
      $input = $request->all();
     
        //sires::update($input);
        //sires::find($id)->update($input);
      
        $updates=DB::table('ordenesdeservicio')->where('id',"=",$id)->update($input);
        Alert::success('Actualizo correctamente la orden de servicio!')->persistent("Close");
        Log::info('El usuario actualizo el registro '. $id .': '. Auth::user()->name);
        

        return redirect()->route('home-principal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ordenesdeservicio  $ordenesdeservicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $destruir=DB::table('ordenesdeservicio')->where('id', '=', $id)->delete();
       Alert::success('Eliminó correctamente la orden de servicio!'.$id)->persistent("Close");
       Log::info('El usuario Elimino el siguiente registro: '. $id .' Usuario: '. Auth::user()->name. $destruir);
        return back();
    }


    public function continuar($id)
    {

        //dd($id);

       $edit= ordenesdeservicio::findOrFail($id);
       //dd($edit);

       $fechaadicional= new Carbon($edit->fecha_inicio_servicio);//Calculo fecha siguiente
       //dd ($fechaadicional->addDay(1));
       $input = [
        'No_de_orden_de_servicio' => $edit->No_de_orden_de_servicio,
        'estadoservicio_id' => $edit->estadoservicio_id,
        'fecha_inicio_servicio' => $fechaadicional->addDay(1),//dia siguiente
        // 'Hora_inicio_en_OT' => $edit->Hora_inicio_en_OT,
        // 'Hora_Final_en_OT' => $edit->Hora_Final_en_OT,
        // 'Hora_Programada' => $edit->Hora_Programada,
        // 'Hora_de_inicio_Servicio_cliente' => $edit->Hora_de_inicio_Servicio_cliente,
        // 'Hora_Final_del_Servicio_Cliente' => $edit->Hora_Final_del_Servicio_Cliente,
        // 'Total_Horas_del_Servicio' => $edit->Total_Horas_del_Servicio,
        'Escolta_asignado' => $edit->Escolta_asignado,
        'cedula' => $edit->cedula,
        'escolta_externo' => $edit->escolta_externo,
        'bilingue' => $edit->bilingue,
        'ID2' => $edit->ID2,
        'placa' => $edit->placa,
        'tipo' => $edit->tipo,
        'cliente' => $edit->cliente,
        'vip' => $edit->vip,
        'solicitante_cliente' => $edit->solicitante_cliente,
        'solicitante_interno' => $edit->solicitante_interno,
        'ciudad_origen' => $edit->ciudad_origen,
        'ciudad_destino' => $edit->ciudad_destino,
        'fecha_solicitud' => $edit->fecha_solicitud,
        'Fecha_de_respuesta_al_cliente' => $edit->Fecha_de_respuesta_al_cliente,
        'tipo_de_servicio' => $edit->tipo_de_servicio,
        'detalle_del_servicio' => $edit->detalle_del_servicio,
        'novedades' => $edit->novedades,
        'px' => $edit->px,
        'armado' => $edit->armado,
        'tipo_renta' => $edit->tipo_renta,
        'Proveedor_vehiculo' => $edit->Proveedor_vehiculo,
        'prefactura' => $edit->prefactura,
        'fecha_prefactura' => $edit->fecha_prefactura,
        'observaciones' => $edit->observaciones,
        'tiempo_rta_cliente' => $edit->tiempo_rta_cliente,
        'tiempo_prefactura' => $edit->tiempo_prefactura,
        'users_id' => $edit->users_id,
        'propuesta_economica' => $edit->propuesta_economica,
         'color_agenda' =>$edit->color_agenda,
         'solicitante_interno2' =>$edit->solicitante_interno2,
         'arma_id' =>$edit->arma_id

         ];

       //DB::table('criterios_evaluacion')->insert($edit);
       $continuar=ordenesdeservicio::create($input);

        Log::info('El usuario dúplico el registro: '.' Usuario: '. Auth::user()->name. $continuar);
       Alert::success('Se dúplico correctamente el registro!')->persistent("Close");
       //\Mail::to('leonidas.fiquitiva@omnitempus.com')->send(new servicioadd($store));
        return back();

    }
    public function pdf($id){
         $edit= ordenesdeservicio::findOrFail($id);
         $escoltas =escolta::all();
         $pdf = PDF::loadView('ordenesdeservicio.pdf',compact('edit','escoltas'))->setPaper('A4', 'landscape');
         return $pdf->stream('presentacion_escolta_vehiculo.pdf');
    }
    


}
