<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\prefacturacion;
use App\codigociudad;
use App\ordenesdeservicio;
use App\fs;
use App\estadofacturacion;
use App\propuestaeconomica;
use App\tarifario;
use App\horaAdicional;
use App\escaner;
use App\horas_adicionales;
use Alert;

use DataTables;

class prefacturaclienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('prefacturacliente.index');
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
        $datos =$request->all('id_ordendeservicio','id_fs','id_ciudad','id_propuesta_economica','numero_prefactura','id_estado_facturacion','fecha_de_servicio','fecha_prefactura','centrodecostos');
        $data =  new prefacturacion($datos);
        $data->save();
    
        $ordendeservicio = ordenesdeservicio::findOrFail($data->id_ordendeservicio);
        $ordendeservicio->update(array('estado_facturacion' => $request->id_estado_facturacion));
        $ordendeservicio->update(array('vip' => $request->vip));
        Log::info('el usuario '. Auth::user()->name.' creo una nueva prefactura otros cliente ID'.$data->id);         

        Alert::success('', 'la prefacturacion ha sido registrada con exito!')->persistent('Close');
        return redirect()->route('prefacturacliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordendeservicios= ordenesdeservicio::findOrFail($id);
        $codigociudad = codigociudad::pluck('ciudad','id');
        $fs = fs::pluck('descripcion','id');
        $estadofacturacion =estadofacturacion::
            where('id',3)
           ->pluck('estado','id');

        $propuestaeconomica = propuestaeconomica:: 
            where('id_cliente',$ordendeservicios->cliente)
           ->pluck('numero_propuesta','id');

        // $tarifa_estandar  =tarifario:: 
        //    join('propuesta_economica','propuesta_economica.id','=','tarifa_estandar.id_propuesta_economica')
        //   ->where('propuesta_economica.id_cliente',$ordendeservicios->cliente)
        //   ->join('tipo_de_tarifa','tipo_de_tarifa.id','=','tarifa_estandar.id_tipodetarifa')
        //   ->pluck('tipo_de_tarifa.nombre','tarifa_estandar.id');

        $escaner  =escaner::all('id','id_wo')
            ->where('id_wo',$ordendeservicios->No_de_orden_de_servicio);

       $ultima_prefactura = prefacturacion::all('numero_prefactura')->last();
       if ($ordendeservicios->tipo_de_servicio == null) {
           $tipodeservicio ="";
       }else {
        $tipodeservicio = $ordendeservicios->tiposdeservicios->desc_tipo_serv;

       }
       return view('prefacturacliente.create',compact('ordendeservicios','codigociudad','fs','estadofacturacion','propuestaeconomica','escaner','ultima_prefactura','tipodeservicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = prefacturacion::find($id);
        $ordendeservicios= ordenesdeservicio::findOrFail($data->id_ordendeservicio);
        $codigociudad = codigociudad::pluck('ciudad','id');
        $fs = fs::pluck('descripcion','id');
        //dd($fs);
        $estadofacturacion =estadofacturacion::
            where('id',3)
            ->orWhere('id',4)
           ->pluck('estado','id');

        $propuestaeconomica = propuestaeconomica:: 
            where('id_cliente',$ordendeservicios->cliente)
           ->pluck('numero_propuesta','id');

         $tarifa_estandar  =tarifario:: 
             join('propuesta_economica','propuesta_economica.id','=','tarifa_estandar.id_propuesta_economica')
             ->where('propuesta_economica.id_cliente',$ordendeservicios->cliente)
             ->join('tipo_de_tarifa','tipo_de_tarifa.id','=','tarifa_estandar.id_tipodetarifa')
             ->join('descripcion_tarifa','descripcion_tarifa.id','tarifa_estandar.id_descripciontarifa')
             ->select("tarifa_estandar.id",DB::raw("CONCAT(tipo_de_tarifa.nombre,'-',descripcion_tarifa.descripcion) AS tarifario"))
             ->pluck('tarifario','tarifa_estandar.id');

          $horadicional  =horaAdicional:: 
                 join('propuesta_economica','propuesta_economica.id','hora_adicional.id_propuesta_economica')
                 ->where('propuesta_economica.id',$data->id_propuesta_economica)
                 ->join('tipo_de_tarifa','tipo_de_tarifa.id','=','.id_tipodetarifa')
                 ->join('descripcion_hora_adicional','descripcion_hora_adicional.id','=','hora_adicional.id_descripcionhoraadicional')
                 ->select("hora_adicional.id",DB::raw("CONCAT(tipo_de_tarifa.nombre,'-',descripcion_hora_adicional.nombre) AS horas"))
                ->pluck('horas','hora_adicional.id');   

        $escaner  =escaner::all('id','id_wo')
            ->where('id_wo',$ordendeservicios->No_de_orden_de_servicio);

            if ($ordendeservicios->tipo_de_servicio == null) {
                $tipodeservicio ="";
            }else {
             $tipodeservicio = $ordendeservicios->tiposdeservicios->desc_tipo_serv;
     
            }
       return view('prefacturacliente.edit',compact('ordendeservicios','codigociudad','fs','tarifa_estandar','horadicional','estadofacturacion','propuestaeconomica','escaner','data','tipodeservicio'));
   

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
          $data = prefacturacion::findOrFail($id);
          $ordendeservicio = ordenesdeservicio::findOrFail($data->id_ordendeservicio);
          $ordendeservicio->update(array('estado_facturacion' => $request->id_estado_facturacion));
          $ordendeservicio->update(array('vip' => $request->vip));
          $datos =$request->all('id_ordendeservicio','id_fs','id_ciudad','id_propuesta_economica','numero_prefactura','id_estado_facturacion','fecha_de_servicio','fecha_prefactura','centrodecostos');

          $data->update($datos);
        
        // if ($request->id_hora_adicional != null) {
        //     $dato = horas_adicionales::where('id_prefacturacion',$id);
        //     if ($dato != null) {
        //      $dato->update($request->all('id_hora_adicional','numero_hora','valor_total_hora')); 
        //     }else{
        //          $dato = new  horas_adicionales($request->all('id_hora_adicional','numero_hora','valor_total_hora'));
        //          $dato->id_prefacturacion = $id;
        //          $dato->save();
        //     }
            
        //    }
        Log::info('El usuario ' .Auth::user()->name.' Actualizó el registro '. $id.' de la prefactura otros clientes');
        Alert::success('', 'la prefacturacion  ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('prefacturacliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = prefacturacion::find($id);
        $data->delete();
        Alert::success('', 'la información ha sido borrada de forma exita!')->persistent('Close');
        Log::info('El usuario '.Auth::user()->name.' Elimino el registro '. $id.' de la prefactura otros clientes');
        return back()->withInput();
    }
    public function tablaindex()
    {
     $data = prefacturacion::query()
      ->join('ordenesdeservicio','ordenesdeservicio.id','=','prefacturacion.id_ordendeservicio')
      ->join('cliente','cliente.id','=','ordenesdeservicio.cliente')
      ->join('codigo_ciudad','codigo_ciudad.id','=','prefacturacion.id_ciudad')
      ->join('estado_facturacion','estado_facturacion.id','=','prefacturacion.id_estado_facturacion')
      ->select(['prefacturacion.id','estado_facturacion.id as idestado_facturacion','prefacturacion.numero_prefactura','cliente.nombre','prefacturacion.valor_total','ordenesdeservicio.No_de_orden_de_servicio','codigo_ciudad.ciudad'])

      ->get();

     return Datatables::of($data)
         ->addColumn('botones' , 'prefacturacliente.actions' )  
         ->addColumn('destroy' , 'prefacturacliente.destroy' )       
         ->rawColumns(['botones','destroy'])
         ->toJson();
    }


    
     public function tarifasestandar(Request $request)
     {
         $data = tarifario::
             join('tipo_de_tarifa','tipo_de_tarifa.id','=','tarifa_estandar.id_tipodetarifa')
            ->join('descripcion_tarifa','descripcion_tarifa.id','=','tarifa_estandar.id_descripciontarifa')
            ->select('tarifa_estandar.id','tarifa_estandar.valor_ciudad','tipo_de_tarifa.nombre as tipodetarifa','descripcion_tarifa.descripcion')
            ->where('tarifa_estandar.id',$request->id)
            ->get();
              return  response()->json($data);
     }

    public function horaadicional (Request $request)
    {
        $data = horaAdicional::
        join('tipo_de_tarifa','tipo_de_tarifa.id','=','hora_adicional.id_tipodetarifa')
       ->join('descripcion_hora_adicional','descripcion_hora_adicional.id','=','hora_adicional.id_descripcionhoraadicional')
       ->where('hora_adicional.id',$request->id)
       ->select('descripcion_hora_adicional.nombre as descripcion','tipo_de_tarifa.nombre as tipodetarifa','hora_adicional.valor')
       ->get();
        return  response()->json($data);
    }

      public function escaner(Request $request)
      {
       $data=escaner::
             where('id_wo',$request->id_ordendeservicio)
             ->select('escaner.id')
             ->get();
             return  response()->json($data);
      }

    
     public function wo(Request $request)
     {
     $data = ordenesdeservicio::query()
     ->where('No_de_orden_de_servicio',$request->id)
     
        ->where(function($estdodeservicio) {
            $estdodeservicio->where('estadoservicio_id', 6)
              ->orWhere('estadoservicio_id',8)
              ->orWhere('estadoservicio_id',2)
              ->orWhere('estadoservicio_id',9)
              ->orWhere('estadoservicio_id',10);
         })
         ->where(function($clientes) {
            $clientes->where('cliente','!=', 68)
              ->orWhere('cliente','!=',52);
        })
        ->select(['ordenesdeservicio.id','ordenesdeservicio.No_de_orden_de_servicio','ordenesdeservicio.fecha_solicitud','ordenesdeservicio.estadoservicio_id','ordenesdeservicio.No_de_orden_de_servicio','ordenesdeservicio.fecha_inicio_servicio','cliente.nombre as clientenombre','ordenesdeservicio.ciudad_destino','ordenesdeservicio.detalle_del_servicio','ordenesdeservicio.estado_facturacion'])
          
          ->leftjoin('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente');

     return Datatables::of($data)
           ->addColumn('botones' , 'otrocliente.actions' ) 
           ->rawColumns(['botones'])
           ->toJson();
     }
    
    public function duplicar($id)
    {
        
        $datos = prefacturacion::findOrFail($id);
         $data = [ 
              'id_fs' => $datos->id_fs,
              'id_ciudad' => $datos->id_ciudad,
              'id_propuesta_economica' =>$datos->id_propuesta_economica,
              'detalle'=>$datos->detalle,
              'numero_prefactura' => $datos->numero_prefactura,
              'fecha_prefactura' =>$datos->fecha_prefactura,
              'horario'=>$datos->horario,
              'fecha_de_servicio'=>$datos->fecha_de_servicio,
              'cantidad'=>$datos->cantidad,
              'valor_unitario'=>$datos->valor_unitario,
              'valor_total' =>$datos->valor_total,
              'id_ordendeservicio'=>$datos->id_ordendeservicio,
              'id_estado_facturacion'=>$datos->id_estado_facturacion
         ];
         $dts=prefacturacion::create($data);
         Alert::success('', 'la información ha sido registrada de forma exita!')->persistent('Close');
         return redirect()->route('prefacturacliente.index');
    }
       
}
