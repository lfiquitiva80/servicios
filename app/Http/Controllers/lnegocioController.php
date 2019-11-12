<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lnegocio;
use Alert;
use DataTables;

class lnegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lnegocio.index');
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
        $lnegocio =  new lnegocio($request-> all());
        $lnegocio->save();
        Alert::success('', 'la linea de negocio  ha sido sido registrada con exito!')->persistent('Close');
        return redirect()->route('linea_de_negocio.index');
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
        $lnegocio = lnegocio::find($request->id);
        $lnegocio->fill($request->all());
        $lnegocio->save();
        Alert::success('', 'la linea de negocio  ha sido sido editado con exito! !')->persistent('Close');

        return redirect()->route('linea_de_negocio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lnegocio = lnegocio::find($id);
        $lnegocio->delete();
        Alert::success('', 'la linea de negocio  ha sido sido borrado de forma exita!')->persistent('Close');
        return redirect()->route('linea_de_negocio.index');
    }

    public function tablaindex(){
         $lnegocio = lnegocio::all();
         return Datatables::of($lnegocio)
         ->addColumn('botones' , 'lnegocio.actions' )       
         ->addColumn('destroy' , 'lnegocio.destroy' )       
         ->rawColumns(['botones','destroy'])
         ->toJson();
    }
}
