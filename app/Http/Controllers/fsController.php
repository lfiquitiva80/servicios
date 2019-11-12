<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fs;
use Alert;

use DataTables;


class fsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fs.index');

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
        $data =  new fs($request-> all());
        $data->save();
        Alert::success('', 'la línea  de negocio  ha sido registrada  con exito!')->persistent('Close');
        return redirect()->route('fs.index');
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
        $data = fs::findOrFail($request->id);
        $data->update($request->all());
        Alert::success('', 'la línea  de negocio ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('fs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = fs::find($id);
        $data->delete();
        Alert::success('', 'la línea  de negocio ha sido eliminada de forma exita!')->persistent('Close');
        return redirect()->route('fs.index');
    }
    public function tablaindex()
    {
        $data =fs::all();
        return Datatables::of($data)
        ->addColumn('botones' , 'fs.actions' )  
        ->rawColumns(['botones'])
        ->toJson();
    }
}
