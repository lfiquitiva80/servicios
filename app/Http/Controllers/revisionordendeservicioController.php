<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ordenesdeservicio;

use DataTables;


class revisionordendeservicioController extends Controller
{
    public function index()
    {
      
    return view('otrocliente.index');

    }
    public function tablaindex()
    {
        $ordendeservicio =ordenesdeservicio::query()
        ->where('estado_facturacion',1)
        ->orWhere('estado_facturacion',2)
        ->where(function($estdodeservicio) {
            $estdodeservicio->where('estadoservicio_id', 6)
              ->orWhere('estadoservicio_id',8)
              ->orWhere('estadoservicio_id',9)
              ->orWhere('estadoservicio_id',10);
         })
         ->where(function($clientes) {
            $clientes->where('cliente','!=', 68)
              ->orWhere('cliente','!=',52);
        })
        ->select(['ordenesdeservicio.id','ordenesdeservicio.No_de_orden_de_servicio','ordenesdeservicio.fecha_solicitud','ordenesdeservicio.estadoservicio_id','ordenesdeservicio.No_de_orden_de_servicio','ordenesdeservicio.fecha_inicio_servicio','cliente.nombre as clientenombre','ordenesdeservicio.ciudad_destino','ordenesdeservicio.detalle_del_servicio','ordenesdeservicio.estado_facturacion'])
          
          ->leftjoin('cliente', 'cliente.id', '=', 'ordenesdeservicio.cliente');
           return Datatables::of($ordendeservicio)
           ->addColumn('botones' , 'otrocliente.actions' ) 
           ->rawColumns(['botones'])
           ->toJson();
    }
}
