<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\prefacturaoxy;
use App\bogota;
use App\barranca;
use App\ordenesdeservicio;
use App\estadofacturacion;
use App\cliente;
use Alert;

use DataTables;

class revisionoxyController extends Controller
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
                             ->orWhere('estado','FACTURADO')
                             ->pluck('estado','id');                     
         $clienteoxy = cliente::query()
                          ->where(function($cliente) {
                           $cliente->where('id', 52)
                            ->orWhere('id',68);
                           })->pluck('nit','id');                  
        return view('revisionoxy.index',compact('bogota','barranca','ordendeservicio','estadofacturacion','estadofacturacion2','clienteoxy'));
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
        
        $oxy = prefacturaoxy::findOrFail($request->id);
        $ordendeservicio = ordenesdeservicio::
        where('id',$oxy->id_ordendeservicio)
        ->update(array('estado_facturacion' => $request->id_estado_facturacion));  
        $oxy->responsable =  Auth::user()->id;    
        $oxy->update($request->all());
        Alert::success('', 'la prefacturacion oxy ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('revisionprefacturaoxy.index');
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
        Alert::success('', 'la prefacturacion oxy  ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('revisionprefacturaoxy.index');
    }
     public function tablaindex()
    {
        $oxy = prefacturaoxy::query()
         ->join('ordenesdeservicio','ordenesdeservicio.id','=','prefacturacion_oxy.id_ordendeservicio')
         ->join('cliente','cliente.id','=','ordenesdeservicio.cliente')
         ->join('estado_facturacion','estado_facturacion.id','=','prefacturacion_oxy.id_estado_facturacion')
         ->select(['prefacturacion_oxy.id','cliente.nombre as clientenombre','cliente.id as idcliente','cliente.nit','prefacturacion_oxy.item_de_contrato','ordenesdeservicio.id as idordendeservicio','ordenesdeservicio.No_de_orden_de_servicio','prefacturacion_oxy.periodo','prefacturacion_oxy.linea_de_negocio','prefacturacion_oxy.ciudad','prefacturacion_oxy.detalle','prefacturacion_oxy.fecha_prefactura','prefacturacion_oxy.propuesta','prefacturacion_oxy.valor_unitario','prefacturacion_oxy.numero_factura','prefacturacion_oxy.hora_inicio','prefacturacion_oxy.hora_final','prefacturacion_oxy.cantidad','prefacturacion_oxy.fecha_servicio','prefacturacion_oxy.valor_total','prefacturacion_oxy.centrodecostos','estado_facturacion.id as idestado_facturacion','prefacturacion_oxy.observacion_prefactura','prefacturacion_oxy.fecha_factura','prefacturacion_oxy.valor_facturado','prefacturacion_oxy.observaciones','prefacturacion_oxy.factura_proveedor','users.name'])
         ->leftJoin('users','users.id','=','prefacturacion_oxy.responsable');
         

         return Datatables::of($oxy)
         ->addColumn('botones' , 'revisionoxy.actions' )  
         ->addColumn('destroy' , 'revisionoxy.destroy' )       
         ->rawColumns(['botones','destroy'])
         ->toJson();
    }
}
