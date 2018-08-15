<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ordenesdeservicio;
use App\escolta;
use Illuminate\Support\Facades\DB;
use App\vehiculo;

class agendaController extends Controller
{


        public function index()
        {
return view('agenda.index');
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
    public function  get_events(){



        $data = \DB::table('ordenesdeservicio')
                    ->join('cliente','cliente.id','=','ordenesdeservicio.cliente')
                    ->join('vehiculo','vehiculo.id','=','ordenesdeservicio.placa')
                    //->select("ordenesdeservicio.Escolta_asignado as id","ordenesdeservicio.Escolta_asignado as resourceId")
    ->select("ordenesdeservicio.Escolta_asignado as id",DB::raw("CONCAT(vehiculo.placa,'  .Detalle Del Servicio:',ordenesdeservicio.detalle_del_servicio,'  .Nombre Cliente:',cliente.nombre) as title"),"ordenesdeservicio.Escolta_asignado as resourceId","fecha_inicio_servicio as start","color_agenda as color")
                    ->get();

      //$data = ordenesdeservicio::select("id","id as resourceId","cliente as title","fecha_inicio_servicio as start" )->get();
      return response()->json($data);
    }
    public function  resourcesColumns(){


      // $data = \DB::table('escolta')
      //       ->leftJoin('ordenesdeservicio', 'escolta.id', '=', 'ordenesdeservicio.Escolta_asignado')
      //       ->select("escolta.id  as id","escolta.nombre as building")
      //       ->get();

      $data = escolta::select("id","nombre as building")->where('activo','si')->orderBy('nombre', 'asc')->get();
      return response()->json($data);
    }

    public function  VehiculosColumns(){

      $data = vehiculo::select("id","placa as building")->where('activo','si')->orderBy('placa', 'asc') ->get();

       return response()->json($data);
    }
public function  Vehiculos_events(){



    $data = \DB::table('ordenesdeservicio')
                ->join('cliente','cliente.id','=','ordenesdeservicio.cliente')
                ->join('escolta','escolta.id','=','ordenesdeservicio.Escolta_asignado')
                //->select("ordenesdeservicio.Escolta_asignado as id","ordenesdeservicio.Escolta_asignado as resourceId")
->select("ordenesdeservicio.placa as id",DB::raw("CONCAT(escolta.nombre,'  .Detalle Del Servicio:',ordenesdeservicio.detalle_del_servicio,'  .Nombre Cliente:',cliente.nombre) as title"),"ordenesdeservicio.placa as resourceId","fecha_inicio_servicio as start","color_agenda as color")
                ->get();

  //$data = ordenesdeservicio::select("id","id as resourceId","cliente as title","fecha_inicio_servicio as start" )->get();
  return response()->json($data);
}
}
