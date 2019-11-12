<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anticipo;
use App\ordenesdeservicio;
use Alert;

use DataTables;

class anticipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordendeservicio = ordenesdeservicio::pluck('No_de_orden_de_servicio','id');
        return view('anticipo.index',compact('ordendeservicio'));
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
        $anticipo = new anticipo($request-> all());
        $anticipo->save();
        Alert::success('', 'el anticipo ha sido sido registrado con exito!')->persistent('Close');
        return redirect()->route('anticipo.index');
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
      $anticipo = anticipo::find($request->id);
      
      $anticipo->fill($request->all());

      //$anticipo->update($request->all());
      $anticipo->save();
      Alert::success('', 'el anticipo ha sido actualizado con exito !')->persistent('Close');
      return redirect()->route('anticipo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $anticipo = anticipo::find($id);
         $anticipo->delete();
         Alert::success('', 'el anticipo ha sido  borrado de forma exita!')->persistent('Close');
        return redirect()->route('anticipo.index');
    }


 
    public function tablaindex()
    {
        $anticipo = anticipo::query()
        ->select(['anticipo.id','ordenesdeservicio.id as idorden','ordenesdeservicio.No_de_orden_de_servicio','anticipo.valor'])
        ->join('ordenesdeservicio','ordenesdeservicio.id','=','anticipo.id_ordendeservicio');

         return Datatables::of($anticipo)
         ->addColumn('botones','anticipo.actions')  
         ->addColumn('destroy','anticipo.destroy')              
         ->rawColumns(['botones','destroy'])
         ->toJson();
    }
}
