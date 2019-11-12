<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\prefacturacion;
use App\codigociudad;
use App\ordenesdeservicio;
use App\fs;
use App\estadofacturacion;
use App\propuestaeconomica;
use App\horaAdicional;
use App\tarifario;
use App\escaner;
use App\User;
use Alert;

use DataTables;


class revisionprefacturaclienteController extends Controller
{
    public function index()
    {
                  
        return view('revisionprefacturacliente.index');

    }
 
    public function show($id){
        $data = prefacturacion::find($id);

        $ordendeservicios= ordenesdeservicio::findOrFail($data->id_ordendeservicio);
        $codigociudad = codigociudad::pluck('ciudad','id');
        $fs = fs::pluck('descripcion','id');

        $estadofacturacion =estadofacturacion::
            where(function($cliente) {
                $cliente->where('id', 3)
                ->orWhere('id',4)
                ->orWhere('id',5);
            })
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

        $usuario =  User::find($data->responsable);

        if ($ordendeservicios->tipo_de_servicio == null) {
            $tipodeservicio ="";
        }else {
         $tipodeservicio = $ordendeservicios->tiposdeservicios->desc_tipo_serv;
 
        }
       return view('revisionprefacturacliente.edit',compact('ordendeservicios','codigociudad','fs','estadofacturacion','propuestaeconomica','tarifa_estandar','horadicional','escaner','data','usuario','tipodeservicio'));
    

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
        $data->responsable =  Auth::user()->id;    
        $data->update($request->all());
        Alert::success('', 'la prefacturacion  ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('revisionprefactura.index');
    }

    public function destroy($id)
    {
        $data = prefacturacion::find($id);
        $data->delete();
        Alert::success('', 'la prefacturacion sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('prefacturacliente.index');
    }
    public function tablaindex()
    {
     $data = prefacturacion::query()
    
     
      ->join('ordenesdeservicio','ordenesdeservicio.id','=','prefacturacion.id_ordendeservicio')
      ->join('cliente','cliente.id','=','ordenesdeservicio.cliente')
      ->join('estado_facturacion','estado_facturacion.id','=','prefacturacion.id_estado_facturacion')
      ->join('codigo_ciudad','codigo_ciudad.id','=','prefacturacion.id_ciudad')
      ->select(['prefacturacion.id','estado_facturacion.id as idestado_facturacion','prefacturacion.numero_prefactura','cliente.nombre','prefacturacion.valor_total','ordenesdeservicio.No_de_orden_de_servicio','codigo_ciudad.ciudad'])
      ->get();

     return Datatables::of($data)
         ->addColumn('botones' , 'revisionprefacturacliente.actions' )  
         ->addColumn('destroy' , 'prefacturacliente.destroy' )       
         ->rawColumns(['botones','destroy'])
         ->toJson();
    }

}
