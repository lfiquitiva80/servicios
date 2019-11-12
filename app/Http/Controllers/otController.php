<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ot;
use Alert;
use DataTables;


class otController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ot.index');

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
        $ot =  new ot($request-> all());
        $ot->save();
        Alert::success('', 'la infromácion  ha sido sido registrado con exito!')->persistent('Close');
        return redirect()->route('ot.index');
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
        $ot = ot::find($request->id);
        $ot->fill($request->all());
        $ot->save();
        Alert::success('', 'el OT  ha sido sido editado con exito! !')->persistent('Close');

        return redirect()->route('ot.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $ot = ot::find($id);
         $ot->delete();
         Alert::success('', 'el ot ha sido sido borrado de forma exita!')->persistent('Close');
         return redirect()->route('ot.index');
    }
    public function tablaindex(){
         $ot = ot::all();
         return Datatables::of($ot)
         ->addColumn('botones' , 'ot.actions' )       
         ->rawColumns(['botones'])
         ->toJson();
    }
}
