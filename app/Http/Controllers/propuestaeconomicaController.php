<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\propuestaeconomica;
use App\cliente;
use App\codigociudad;
use Alert;

use DataTables;


class propuestaeconomicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = cliente::orderBy('nombre', 'ASC')->pluck('nombre','id');
        $codigociudad = codigociudad::pluck('ciudad','id');
        return view('propuestaeconomica.index',compact('cliente','codigociudad'));
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
        
        $validatedData = $request->validate([
            'numero_propuesta'  =>'required|unique:propuesta_economica,numero_propuesta'
      ]);
        $data =  new propuestaeconomica ($request->all());
        $data->save();
        Alert::success('', 'la propuesta economica ha sido  registrada con exito!')->persistent('Close');
        return redirect()->route('propuestaeconomica.index');
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
        $validatedData = $request->validate([
            'numero_propuesta'  =>'required|unique:propuesta_economica,numero_propuesta,'.$request->id
      ]);
        $data = propuestaeconomica::findOrFail($request->id);
        $data->update($request->all());
        Alert::success('', 'la prpopuesta economica ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('propuestaeconomica.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propuesta = propuestaeconomica::find($id);
        $propuesta->delete();
        Alert::success('', ' la propuesta economica ha sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('propuestaeconomica.index');
    }
    public function tablaindex()
    {
        $propuesta =  propuestaeconomica::query()
        ->join('cliente','cliente.id','=','propuesta_economica.id_cliente')
        // ->select(['propuesta_economica.id','propuesta_economica.numero_propuesta','cliente.id as clienteid','cliente.nombre','propuesta_economica.antencion','propuesta_economica.email','propuesta_economica.contacto_ot','propuesta_economica.cargo','propuesta_economica.fecha','propuesta_economica.numero_dia','propuesta_economica.numero_puesto','propuesta_economica.descripcion','propuesta_economica.ciudad','propuesta_economica.condicion_salarial','propuesta_economica.dotacion','propuesta_economica.und','propuesta_economica.valor_unitario','propuesta_economica.valor_total']);
         ->select(['propuesta_economica.id','propuesta_economica.numero_propuesta','cliente.id as clienteid','cliente.nombre','propuesta_economica.antencion','propuesta_economica.email','propuesta_economica.contacto_ot','propuesta_economica.cargo','propuesta_economica.fecha','propuesta_economica.descripcion','codigo_ciudad.id as idcodigo_ciudad',])
         ->leftJoin('codigo_ciudad','codigo_ciudad.id','=','propuesta_economica.id_ciudad');

        return Datatables::of($propuesta)
        ->addColumn('botones' , 'propuestaeconomica.actions' )  
        ->addColumn('destroy' , 'propuestaeconomica.destroy' )       
        ->rawColumns(['botones','destroy'])
        ->toJson();
    }

    
}
