<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\puc;
use Alert;
use DataTables;

class pucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('puc.index');
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
        $puc =  new puc($request-> all());
        $puc->save();
        Alert::success('', 'la cuenta ha sido sido registrado con exito!')->persistent('Close');
        return redirect()->route('puc.index');
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
        $puc = puc::find($request->id);
        $puc->fill($request->all());
        $puc->save();
          
        Alert::success('', 'la cuenta ha sido sido editado con exito! !')->persistent('Close');
        

        return redirect()->route('puc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $puc = puc::find($id);
         $puc->delete();
         Alert::success('', 'la cuenta ha sido sido borrado de forma exita!')->persistent('Close');
         return redirect()->route('puc.index');
    }

    public function tablaindex(){

        $puc = puc::all();
        return Datatables::of($puc)
        ->addColumn('botones' , 'puc.actions' )       
        ->rawColumns(['botones'])
        ->toJson();
    }
}
