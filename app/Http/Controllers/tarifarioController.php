<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\tarifario;
use App\tipodetarifa;
use App\descripciontarifa;
use App\propuestaeconomica;
use App\horaAdicional;
use App\codigociudad;

use Alert;

use DataTables;


class tarifarioController extends Controller
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
      $descripcion = descripciontarifa::pluck('descripcion','id'); 
      $codigociudad = codigociudad::pluck('ciudad','ciudad');
        return view('tarifario.index',compact('tipodetarifa','descripcion','propuesta_economica','codigociudad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data =  new tarifario ($request-> all());
        $data->ciudad =implode(", ",$request->ciudad);
        $data->save();
        Alert::success('', 'la tarifa ha sido  registrada con exito!')->persistent('Close');
        Log::info('el usuario '. Auth::user()->name.' creo una nueva tarifa estandar ID '.$data->id);         

        return redirect()->route('tarifas.index');
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
        $data = tarifario::findOrFail($request->id);
        $data->fill($request->all());
        $data->ciudad =implode(", ",$request->ciudad);
        $data->save();
        Log::info('El usuario ' .Auth::user()->name.' Actualizó el registro '. $data->id.' la tarifa estandar');

        Alert::success('', 'la tarifa ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('tarifas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarifario = tarifario::find($id);
        $tarifario->delete();
        Alert::success('', ' la tarifa ha sido borrado de forma exita!')->persistent('Close');
        Log::info('El usuario '.Auth::user()->name.' Elimino el registro '. $id.' de la tarifa estandar');

        return redirect()->route('tarifas.index');
    }
    public function tablaindex()
    {
        $tarifario = tarifario::query()
            ->join('tipo_de_tarifa','tipo_de_tarifa.id','=','tarifa_estandar.id_tipodetarifa')
            ->join('descripcion_tarifa','descripcion_tarifa.id','tarifa_estandar.id_descripciontarifa')
            ->select('tarifa_estandar.id','propuesta_economica.id as idpropuesta_economica','propuesta_economica.numero_propuesta','tipo_de_tarifa.id as idtipodetarifa','tipo_de_tarifa.nombre','descripcion_tarifa.id as iddescripcion','descripcion_tarifa.descripcion','tarifa_estandar.ciudad','tarifa_estandar.year','tarifa_estandar.valor_ciudad','tarifa_estandar.item_oxy')
            ->leftjoin('propuesta_economica','propuesta_economica.id','tarifa_estandar.id_propuesta_economica');
            return Datatables::of($tarifario)
         ->addColumn('checkbox' , function ($tarifario) {
            return '<input type="checkbox" class="tarifa_checkbox" value="'.$tarifario->id.'">';
        })
         ->addColumn('botones' , 'tarifario.actions' )  
         ->addColumn('destroy' , 'tarifario.destroy' )       
         ->rawColumns(['botones','destroy','checkbox'])
         ->toJson();
    }
    public function  aumentar(Request $request)
    {
        $valor= $request->porcentaje;
        
        $id= json_decode($request->id);
        if($id== null){
            alert()->error('Error', 'Seleccione una tarifa válida')->persistent('Close');
        }else{
        for ($i=0; $i <count($id); $i++) {
            
         $value = tarifario::findOrFail($id[$i]);
          $data = [
            'id_propuesta_economica'=> $value->id_propuesta_economica,
            'id_tipodetarifa'=> $value->id_tipodetarifa,
            'id_descripciontarifa' => $value->id_descripciontarifa,
            'ciudad' => $value->ciudad,
            'year'=> $value->year,
            'valor_ciudad' =>  $value->valor_ciudad*$valor/100+$value->valor_ciudad,
            'item_oxy' =>$value->item_oxy
             ];
            $dts=tarifario::create($data);
            Log::info('el usuario '. Auth::user()->name.' creo una nueva tarifa estandar ID '.$dts->id);         

        }
        Alert::success('', 'la tarifa ha sido  registrada con exito!')->persistent('Close');
      }
        return redirect()->route('tarifas.index');
    }

    public function horasadicionales(Request $request)
    {
      $data = horaAdicional::query()
      ->select('id_tipodetarifa','id_descripcionhoraadicional','valor','year')
      ->where('id_tipodetarifa', $request->tipodetarifa)
      ->get();
      return response()->json($data); 
    }
}
