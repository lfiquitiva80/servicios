<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\barranca;
use Alert;


use DataTables;

class barrancaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barranca = barranca::pluck('item','item')->unique();      
        return view('tarifabarranca.index',compact('barranca'));
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
        $barranca =  new barranca ($request-> all());
       
        $barranca->save();
        Alert::success('', 'la tarifia Barraca ha sido registrada con exito!')->persistent('Close');
        return redirect()->route('tarifasbarranca.index');
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
        $barranca = barranca::findOrFail($request->id);
        $barranca->update($request->all());
        Alert::success('', 'la tarifa barranca ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('tarifasbarranca.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barraca = barranca::find($id);
        $barraca->delete();
        Alert::success('', 'la tarifa de barranca ha sido  borrada de forma exita!')->persistent('Close');
        return redirect()->route('tarifasbarranca.index');
    }
    public function tablaindex()
    {
        $barranca = barranca::all();
        return Datatables::of($barranca)
         ->addColumn('botones' , 'tarifabarranca.actions' )  
         ->addColumn('destroy' , 'tarifabarranca.destroy' )       
         ->rawColumns(['botones','destroy'])
         ->toJson();

    }
    public function periodoall()
    {
        $datos=barranca::all();
        return response()->json($datos);
    }

    
}
