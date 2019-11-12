<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\prefacturaoxy;
use App\bogota;
use App\barranca;
use App\ordenesdeservicio;
use App\estadofacturacion;
use App\cliente;
use Alert;

use DataTables;


class prefacturaoxyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bogota = bogota::pluck('item','item')->unique();      
        $barranca = barranca::pluck('item','item')->unique(); 
        $ordendeservicio = ordenesdeservicio::pluck('No_de_orden_de_servicio','id');
        $estadofacturacion = estadofacturacion::query()
                            ->where('estado','PREFACTURACIÓN')
                            ->orWhere('estado','NO FACTURADO')
                            ->pluck('estado','id');
        $estadofacturacion2 = estadofacturacion::query()
                             ->where('estado','PREFACTURACIÓN')
                             ->orWhere('estado','DEVOLUCIÓN PREFACTURACIÓN')
                             ->orWhere('estado','NO FACTURADO')
                             ->pluck('estado','id');                       
         $clienteoxy = cliente::query()
                          ->where(function($cliente) {
                           $cliente->where('id', 52)
                            ->orWhere('id',68);
                           })->pluck('nit','id');   
                                         
        return view('prefacturaoxy.index',compact('bogota','barranca','ordendeservicio','estadofacturacion','estadofacturacion2','clienteoxy'));
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
        $oxy =  new prefacturaoxy ($request-> all());
        $ordendeservicio = ordenesdeservicio::findOrFail($request->id_ordendeservicio)
                     ->update(array('estado_facturacion' => $request->id_estado_facturacion));
        $oxy->save();
        
        Alert::success('', 'la prefacturacion oxy ha sido sido registrada con exito!')->persistent('Close');
        return redirect()->route('prefacturaoxy.index');
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
        $ordendeservicios= ordenesdeservicio::findOrFail($id);
        $bogota = bogota::orderBy('item')->pluck('item','item')->unique();      
        $barranca = barranca::orderBy('item')->pluck('item','item')->unique(); 

        $estadofacturacion = estadofacturacion::query()
        ->where('estado','PREFACTURACIÓN')
        ->orWhere('estado','NO FACTURADO')
        ->pluck('estado','id');

         $estadofacturacion2 = estadofacturacion::query() 
         ->where('estado','PREFACTURACIÓN')
         ->orWhere('estado','DEVOLUCIÓN PREFACTURACIÓN')
         ->orWhere('estado','NO FACTURADO')
         ->pluck('estado','id'); 

        $ordendeservicio = ordenesdeservicio::all()
                            ->where('id',$ordendeservicios->id)
                            ->pluck('No_de_orden_de_servicio','id');
        $ciudad  = $ordendeservicios->ciudad_destino;

        $clienteoxy = cliente::all()
                     ->where('id',$ordendeservicios->cliente)
                    ->pluck('nit','id');      

        return view('prefacturaoxy.create',compact('bogota','barranca','ordendeservicio','estadofacturacion','estadofacturacion2','clienteoxy','ciudad'));
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
        $oxy = prefacturaoxy::findOrFail($request->id);
        $ordendeservicio = ordenesdeservicio::findOrFail($oxy->id_ordendeservicio);
        $ordendeservicio->update(array('estado_facturacion' => $request->id_estado_facturacion));
        
        $oxy->update($request->all());
        Alert::success('', 'la prefacturacion oxy ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('prefacturaoxy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oxy = prefacturaoxy::find($id);
        $oxy->delete();
        Alert::success('', 'la prefacturacion oxy  ha sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('prefacturaoxy.index');
    }
    public function tablaindex()
    {
        $oxy = prefacturaoxy::query()
        
         ->join('ordenesdeservicio','ordenesdeservicio.id','=','prefacturacion_oxy.id_ordendeservicio')
         ->join('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente')
         ->join('estado_facturacion','estado_facturacion.id','=','prefacturacion_oxy.id_estado_facturacion')

         ->select(['prefacturacion_oxy.id','cliente.nombre as clientenombre','cliente.id as idcliente','prefacturacion_oxy.item_de_contrato','ordenesdeservicio.id as idordendeservicio','ordenesdeservicio.No_de_orden_de_servicio','prefacturacion_oxy.periodo','prefacturacion_oxy.linea_de_negocio','prefacturacion_oxy.ciudad','prefacturacion_oxy.detalle','prefacturacion_oxy.fecha_prefactura','prefacturacion_oxy.propuesta','prefacturacion_oxy.valor_unitario','prefacturacion_oxy.numero_factura','prefacturacion_oxy.hora_inicio','prefacturacion_oxy.hora_final','prefacturacion_oxy.cantidad','prefacturacion_oxy.fecha_servicio','prefacturacion_oxy.valor_total','prefacturacion_oxy.centrodecostos','estado_facturacion.id as idestado_facturacion','prefacturacion_oxy.observacion_prefactura']);
         
           
         return Datatables::of($oxy)
         ->addColumn('editar' , 'prefacturaoxy.actions' )  
          ->addColumn('duplicar' , function ($oxy)  {
              return '<a href="duplicarprefacturaoxy/'.$oxy->id.'"  class="btn btn-primary btn-sm" title="Duplicar" onclick="return confirm('."'Desea duplicar el registro actual ?'".')"><i class="fa fa-clone" aria-hidden="true"></i> Duplicar</a>';
             })
         ->addColumn('destroy' , 'prefacturaoxy.destroy' )       
         ->rawColumns(['editar','duplicar','destroy'])
         ->toJson();
    }
    
    public function ordenesprefactura(Request $request)
    {
       
        $dts  = ordenesdeservicio ::findOrFail($request->id);
        if ( $dts->cliente == 52 ) {
            $data = prefacturaoxy::
            join('tarifas_barranca','tarifas_barranca.valor_con_aui','=','prefacturacion_oxy.valor_unitario')
            ->where('id_ordendeservicio',$dts->id)
            ->select('prefacturacion_oxy.id','tarifas_barranca.valor_con_aui')

            ->get();
            return response()->json($data);
            
          }else {
            $data = prefacturaoxy::
            join('tarifas_bogota','tarifas_bogota.valor_con_aui','=','prefacturacion_oxy.valor_unitario')
            ->where('id_ordendeservicio',$dts->id)
            ->select('prefacturacion_oxy.id','tarifas_bogota.valor_con_aui')
            ->get()
            ->unique('id');

            return response()->json($data);
          
          }

          

          
        
        
    }
    public function barranca(Request $request)
    {
       // DD($request->barranca);
        $data = barranca::select('item','periodo','valor_con_aui','descripcion')
        
        ->where('item',$request->item)->get();
        //barranca::all();
        return response()->json($data);
    }
    public function bogota(Request $request)
    {
        $data = bogota::select('item','periodo','valor_con_aui','descripcion')->where('item',$request->item)->get();
        return response()->json($data);
    }

    public function duplicar($id)
    {
        $oxy = prefacturaoxy::findOrFail($id);
       $data = [
            'linea_de_negocio' => $oxy->linea_de_negocio,
            'id_ordendeservicio' => $oxy->id_ordendeservicio,
            'detalle' => $oxy->detalle,
            'linea_de_negocio' => $oxy->linea_de_negocio,
            'ciudad'=> $oxy->ciudad,
            'propuesta' => $oxy->propuesta,
            'numero_factura' => $oxy->numero_factura,
            'fecha_prefactura' => $oxy->fecha_prefactura,
            'hora_inicio' => $oxy->hora_inicio,
            'hora_final' => $oxy->hora_final,
            //'cantidad' => $oxy->cantidad,
            'fecha_servicio' => $oxy->fecha_servicio,
            'valor_unitario' => $oxy->valor_unitario,
            //'valor_total' => $oxy->valor_total,
            'centrodecostos' => $oxy->centrodecostos,
            'id_estado_facturacion' => $oxy->id_estado_facturacion,
            'observacion_prefactura' => $oxy->observacion_prefactura
             ];
         $dts=prefacturaoxy::create($data);   
         Alert::success('', 'la prefacturacion oxy ha sido sido registrada con exito!')->persistent('Close');
         return redirect()->route('prefacturaoxy.index');
    }
}
