<?php

namespace App\Http\Controllers;

use App\servicios_adicionales_occidental;
use Illuminate\Http\Request;
use App\estadoservicio;
use App\ordenesdeservicio;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Datatables;
use Alert;

class servicios_adicionales_occidentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info('Ingreso a los servicios adicionales: '. Auth::user()->name);

        $index = DB::table('servicios_adicionales_occidental')->paginate();

        //dd($index);


        //return \Datatables::of(empleado::all())->make(true);

        return view('occidental.index',compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $index = DB::table('servicios_adicionales_occidental')->paginate();
        $ordenesdeservicio = ordenesdeservicio::pluck('No_de_orden_de_servicio','id');
        //dd($index);
        return view('occidental.create', compact('ordenesdeservicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
       //dd($input);

            $store=servicios_adicionales_occidental::create($input); 
       Alert::success('Se guardo correctamente el servicio adicional Occidental!')->persistent("Close");

        return redirect()->route('occidental.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\servicios_adicionales_occidental  $servicios_adicionales_occidental
     * @return \Illuminate\Http\Response
     */
    public function show(servicios_adicionales_occidental $servicios_adicionales_occidental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\servicios_adicionales_occidental  $servicios_adicionales_occidental
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= servicios_adicionales_occidental::findOrFail($id);
        //dd($edit);
         $ordenesdeservicio = ordenesdeservicio::pluck('No_de_orden_de_servicio','id');
      
        return view('occidental.edit', compact('edit','ordenesdeservicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\servicios_adicionales_occidental  $servicios_adicionales_occidental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('servicios_adicionales_occidental')->where('id',"=",$id)->update($input); 
        Alert::success('Actualizo correctamente el servicio adicional de occidental!')->persistent("Close");

        return redirect()->route('occidental.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\servicios_adicionales_occidental  $servicios_adicionales_occidental
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $destruir=DB::table('servicios_adicionales_occidental')->where('id', '=', $id)->delete();
       Alert::success('Eliminó correctamente el servicio adicional de Occidental!'.$id)->persistent("Close");
        return back();
    }
}
