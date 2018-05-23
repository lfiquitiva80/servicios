<?php

namespace App\Http\Controllers;

use App\ordenesdeservicio;
use App\estadoservicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Datatables;
use Alert;

class ordenesdeservicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info('Ingreso a las ordenes de servicio: '. Auth::user()->name);

        $index = DB::table('ordenesdeservicio')->paginate();

        //dd($index);


        //return \Datatables::of(empleado::all())->make(true);

        return view('ordenesdeservicio.index',compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $index = DB::table('ordenesdeservicio')->paginate();
        $estadoservicio = estadoservicio::pluck('estadoservicio','id');
        //dd($index);
        return view('ordenesdeservicio.create', compact('estadoservicio'));
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

            $store=ordenesdeservicio::create($input); 
       Alert::success('Se guardo correctamente el nuevo servicio!')->persistent("Close");

        return redirect()->route('ordenesdeservicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ordenesdeservicio  $ordenesdeservicio
     * @return \Illuminate\Http\Response
     */
    public function show(ordenesdeservicio $ordenesdeservicio)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ordenesdeservicio  $ordenesdeservicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $edit= ordenesdeservicio::findOrFail($id);
         $estadoservicio = estadoservicio::pluck('estadoservicio','id');
        //dd($edit);

      
        return view('ordenesdeservicio.edit', compact('edit','estadoservicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ordenesdeservicio  $ordenesdeservicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('ordenesdeservicio')->where('id',"=",$id)->update($input); 
        Alert::success('Actualizo correctamente la orden de servicio!')->persistent("Close");

        return redirect()->route('ordenesdeservicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ordenesdeservicio  $ordenesdeservicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $destruir=DB::table('ordenesdeservicio')->where('id', '=', $id)->delete();
       Alert::success('Eliminó correctamente la orden de servicio!'.$id)->persistent("Close");
        return back();
    }
}
