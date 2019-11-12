<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\descripcionHoraAdicional;
use App\tipodetarifa;
use App\horaAdicional;
use App\propuestaeconomica;
use Alert;

use DataTables;

class horaadicionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propuesta_economica = propuestaeconomica::pluck('numero_propuesta','id');
        $tipodetarifa = tipodetarifa::pluck('nombre','id'); 
        $descripcion = descripcionHoraAdicional::pluck('nombre','id'); 
        return view('horaadicional.index',compact('tipodetarifa','descripcion','propuesta_economica'));
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
        $hora =  new horaAdicional ($request-> all());
        $hora->save();

        Alert::success('', 'la Hora adicional  ha sido  registrada con exito!')->persistent('Close');
        return redirect()->route('horaadicionales.index');
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
        $hora = horaAdicional::findOrFail($request->id);
        $hora->update($request->all());
        Alert::success('', 'la Hora adicional  ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('horaadicionales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hora = horaAdicional::find($id);
        $hora->delete();
        Alert::success('', ' la hora adicional  ha sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('horaadicionales.index');
    }
    public function tablaindex()
    {
        $hora = horaAdicional::query()
        ->join('tipo_de_tarifa','tipo_de_tarifa.id','=','hora_adicional.id_tipodetarifa')
        ->join('descripcion_hora_adicional','descripcion_hora_adicional.id','=','hora_adicional.id_descripcionhoraadicional')
        ->select(['hora_adicional.id','propuesta_economica.id as idpropuesta_economica','propuesta_economica.numero_propuesta','tipo_de_tarifa.nombre as name','tipo_de_tarifa.id as idtipo_de_tarifa','descripcion_hora_adicional.nombre','descripcion_hora_adicional.id as iddescripcion_hora_adicional','hora_adicional.valor','hora_adicional.year'])
        ->leftjoin('propuesta_economica','propuesta_economica.id','hora_adicional.id_propuesta_economica');


         return Datatables::of($hora)
         
         ->addColumn('botones' , 'horaadicional.actions' ) 
         ->addColumn('checkbox' , function ($hora) {
            return '<input type="checkbox" class="horas_checkbox" value="'.$hora->id.'">';
        }) 
         ->addColumn('destroy' , 'horaadicional.destroy' )       
         ->rawColumns(['botones','checkbox','destroy'])
         ->toJson();
    }
    public function aumentar(Request $request)
    {
        $valor= $request->porcentaje;
        
        $id= json_decode($request->id);
        if($id== null){
            alert()->error('Seleccione una hora adicional', 'Error')->persistent('Close');
        }else{
        for ($i=0; $i <count($id); $i++) {
            
         $value = horaAdicional::findOrFail($id[$i]);
          $data = [
            'id_propuesta_economica'=>$value->id_propuesta_economica,
            'id_tipodetarifa'=> $value->id_tipodetarifa,
            'id_descripcionhoraadicional' => $value->id_descripcionhoraadicional,
            'year'=> $value->year,
            'valor' => $value->valor*$valor/100+$value->valor
            
             ];

            $dts=horaAdicional::create($data);
        }
        Alert::success('', 'la hora adicional ha sido registrada con exito!')->persistent('Close');
      }
        return redirect()->route('horaadicionales.index');
    }
}
