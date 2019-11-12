<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bogota;
use Alert;


use DataTables;


class bogotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bogota = bogota::pluck('item','item')->unique();      

        return view('tarifabogota.index',compact('bogota'));
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
        $bogota =  new bogota ($request-> all());
      
        $bogota->save();
        Alert::success('', 'la tarifia Bogotá ha sido sido registrada con exito!')->persistent('Close');
        return redirect()->route('tarifasbogota.index');
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
        $bogota = bogota::findOrFail($request->id);
        $bogota->update($request->all());
        Alert::success('', 'la tarifa bogotá ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('tarifasbogota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bogota = bogota::find($id);
        
        $bogota->delete();
        Alert::success('', 'la tarifa bogotá ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('tarifasbogota.index');
    }
    public function tablaindex()
    {
        $bogota = bogota::all();
        return Datatables::of($bogota)
         ->addColumn('botones' , 'tarifabogota.actions' )  
         ->addColumn('destroy' , 'tarifabogota.destroy' )       
         ->rawColumns(['botones','destroy'])
         ->toJson();

    }
    public function periodoall(Request $request)
    {
        $data=bogota::query()
        ->select('item','descripcion','unidad','periodo')
        ->where('item',$request->item)
        ->get();

        return response()->json($data);
    }
}
