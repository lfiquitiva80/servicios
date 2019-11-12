<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\horas_adicionales;
use Alert;

use DataTables;


class horaprefacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data =  horas_adicionales::
                  where('id_prefacturacion',$request->id)
                  ->get();

         return Datatables::of($data)
                 ->addColumn('editar' , 'horaprefactura.actions' )  
                 ->addColumn('destroy' , 'horaprefactura.destroy' )       
                 ->rawColumns(['editar','destroy'])
                 ->toJson();
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
        $data = new horas_adicionales($request->all());
        $data->save();
        Alert::success('', 'la información  ha sido registrada con exito!')->persistent('Close');
        Log::info('el usuario '. Auth::user()->name.' creo una nueva hora prefactura otros cliente ID'.$data->id);         

        return back()->withInput();

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
        $data = horas_adicionales::findOrFail($request->id);
        $data->update($request->all());
        Log::info('El usuario ' .Auth::user()->name.' Actualizó el registro '.$data->id.' de la  hora prefactura otros clientes');
        Alert::success('', 'la información ha sido actualizada con exito !')->persistent('Close');
        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = horas_adicionales::find($id);
        $data->delete();
        Alert::success('', 'la información ha sido borrada de forma exita!')->persistent('Close');
        Log::info('El usuario '.Auth::user()->name.' Elimino el registro '. $id.'una hora prefactura otros clientes');

        return back()->withInput();
    }
}
