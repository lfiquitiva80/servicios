<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipodetarifa;
use Alert;

use DataTables;

class tipodetarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tipodetarifa.index');
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
        $data =  new tipodetarifa ($request-> all());
        $data->save();
        
        Alert::success('', 'el tipo de tarifa ha sido  registrada con exito!')->persistent('Close');
        return redirect()->route('tipodetarifa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $data =tipodetarifa ::findOrFail($request->id);
        $data->update($request->all());
        Alert::success('', 'el tipo de tarifa ha sido actualizada con exito !')->persistent('Close');
        return redirect()->route('tipodetarifa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = tipodetarifa::find($id);
        $data->delete();
        Alert::success('', ' el tipo de tarifa ha sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('tipodetarifa.index');
    }
     public  function tablaindex()
     {
        $data = tipodetarifa::all();
         return Datatables::of($data)
         ->addColumn('edit' , 'tipodetarifa.actions' )  
         ->addColumn('destroy' , 'tipodetarifa.destroy' )       
         ->rawColumns(['edit','destroy'])
         ->toJson();
      }

}
