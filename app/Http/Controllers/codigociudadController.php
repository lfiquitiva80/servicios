<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\codigociudad;
use Alert;

use DataTables;


class codigociudadController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('codigociudad.index');

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
        $data =  new codigociudad ($request-> all());
        $data->save();
        Alert::success('', 'El código ciudad ha sido registrada  con exito!')->persistent('Close');
        return redirect()->route('codigociudad.index');
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
        $data = codigociudad::findOrFail($request->id);
        $data->update($request->all());
        Alert::success('', 'El código ciudad ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('codigociudad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = codigociudad::find($id);
        $data->delete();
        Alert::success('', ' El código ciudad ha sido eliminada de forma exita!')->persistent('Close');
        return redirect()->route('codigociudad.index');
    }
    public function tablaindex()
    {
        $data = codigociudad::all();
        return Datatables::of($data)
        ->addColumn('edicion' , 'codigociudad.actions' )  
        ->addColumn('destroy' , 'codigociudad.destroy' )  
        ->rawColumns(['edicion','destroy'])
        ->toJson();
        
    }
   
}
