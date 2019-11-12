<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\c_costo;
use App\cliente;
use Alert;

use DataTables;

class centro_de_costoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = cliente::pluck('nit','id');
        
        return view('c_costos.index',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       // return view('c_costos.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $costos =  new c_costo($request-> all());
        $costos->save();
        Alert::success('', 'la infromácion  ha sido sido registrado con exito!')->persistent('Close');
        return redirect()->route('centro_de_costos.index');
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
        $request->id;
        $costos = c_costo::find($request->id);
        $costos->fill($request->all());
        $costos->save();
          
        Alert::success('', 'el centro de costos  ha sido sido editado con exito! !')->persistent('Close');
        

        return redirect()->route('centro_de_costos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $costos = c_costo::find($id);
         $costos->delete();
         Alert::success('', 'la cuenta ha sido sido borrado de forma exita!')->persistent('Close');
         return redirect()->route('centro_de_costos.index');
    }
    public function tablaindex(){

        $costos =c_costo::query()
         ->join('cliente','cliente.id','=','centro_de_costos.id_cliente')
         ->select(['cliente.nit as nit','cliente.nombre as nombre','centro_de_costos.id as id','centro_de_costos.centro_de_costos','centro_de_costos.id_cliente as idcliente']);
        
        return Datatables::of($costos)
        
        ->addColumn('botones' ,'c_costos.actions') 
        ->addColumn('destroy' ,'c_costos.destroy')      
        ->rawColumns(['botones','destroy'])
        ->toJson();
    }
     public function idclientes(){
        $row=cliente::all();
        return response()->json($row);
    }
}
