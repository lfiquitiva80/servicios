<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ordenesdeservicio;
use App\Mail\correccion;
use Alert;


use DataTables;


class ordenesoxyController extends Controller
{
    public function index()
    {
    
    
        return view('clienteoxy.index');

    }
    
    public function tablaindex(){
        
        $data = ordenesdeservicio::query()
               
        ->where(function($estdodeservicio) {
            $estdodeservicio->where('estadoservicio_id', 6)
              ->orWhere('estadoservicio_id',8)
              ->orWhere('estadoservicio_id',9);
         })
         
          ->where(function($clientes) {
             $clientes->where('cliente', 68)
               ->orWhere('cliente',52);
         })
          ->select(['ordenesdeservicio.id','ordenesdeservicio.No_de_orden_de_servicio','ordenesdeservicio.fecha_solicitud','ordenesdeservicio.estadoservicio_id','ordenesdeservicio.No_de_orden_de_servicio','ordenesdeservicio.fecha_inicio_servicio','cliente.nombre as clientenombre','ordenesdeservicio.ciudad_destino','ordenesdeservicio.detalle_del_servicio','ordenesdeservicio.estado_facturacion'])
          
          ->leftjoin('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente');
           return Datatables::of($data)
           ->addColumn('botones' , 'clienteoxy.actions' ) 
           ->rawColumns(['botones'])
           ->toJson();

    }

    public function fechabuscar(Request $request)
    {
        dd($request->fecha_inicio_servicio);
        $data = ordenesdeservicio::query()
               
        ->where(function($estdodeservicio) {
            $estdodeservicio->where('estadoservicio_id', 6)
              ->orWhere('estadoservicio_id',8)
              ->orWhere('estadoservicio_id',9);
         })
         
          ->where(function($clientes) {
             $clientes->where('cliente', 68)
               ->orWhere('cliente',52);
         })
         ->where('fecha_inicio_servicio',$request->fecha_inicio_servicio)

         ->select(['ordenesdeservicio.id','ordenesdeservicio.No_de_orden_de_servicio','ordenesdeservicio.fecha_solicitud','ordenesdeservicio.estadoservicio_id','ordenesdeservicio.No_de_orden_de_servicio','ordenesdeservicio.fecha_inicio_servicio','cliente.nombre as clientenombre','ordenesdeservicio.ciudad_destino','ordenesdeservicio.detalle_del_servicio','ordenesdeservicio.estado_facturacion'])
          
          ->leftjoin('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente');
          return response()->json($data);
                     
        //    return Datatables::of($data)
        //    ->addColumn('prefacturaoxy' , function ($data) {
        //     return '<a  href="'.url('prefacturaoxy/'.$data->id).'/edit"  class="btn btn-default" title="prefactura" ><i class="fa fa-plus" aria-hidden="true">
        //     Prefactura</i></a>';
        // })
          
        //    ->addColumn('wo' , function ($data) {
        //      return '<a  href="'.url('wo/'.$data->No_de_orden_de_servicio).'/edit" class="btn btn-warning" title="Lista de Chequeo">
        //      '.$data->No_de_orden_de_servicio.'
        //    </a>
        //    '; })
        

        //    ->rawColumns(['prefacturaoxy','wo'])
        //    ->toJson();



    } 
    public function correciones()
    {
        $email =  'analista.operaciones@omnitempus.com';
                  
        return view('correciones.index',compact('email'));

    }
    public function enviar(Request $request)
    {
        //dd($request->all());
        
        \Mail::to($request->email)
        ->cc(Auth::user()->email)
        ->send(new correccion($request));
        Alert::success('el correo ha sido envidado correctamente !')->persistent("Close");
        return back();
    }
}
