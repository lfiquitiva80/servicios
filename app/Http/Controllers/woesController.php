<?php

namespace App\Http\Controllers;

use App\wo;
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

class woesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        Log::info('Ingreso a las ordenes de trabajo WO: '. Auth::user()->name);

        $index = DB::table('wo')->paginate();

        //dd($index);


        //return \Datatables::of(empleado::all())->make(true);

        return view('wo.index',compact('index'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                //$index = DB::table('ordenesdeservicio')->paginate();
        //$estadoservicio = estadoservicio::pluck('estadoservicio','id');
        //dd($index);
        return view('wo.create');
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

            $store=wo::create($input); 
       Alert::success('Se guardo correctamente la nueva orden de servicio! con el WO ', $store->id)->persistent("Close");

        return redirect()->route('wo.index');
        //return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\wo  $wo
     * @return \Illuminate\Http\Response
     */
    public function show(wo $wo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\wo  $wo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $edit= wo::findOrFail($id);
         //$estadoservicio = estadoservicio::pluck('estadoservicio','id');
        //dd($edit);

      
        return view('wo.edit', compact('edit'));          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\wo  $wo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('wo')->where('id',"=",$id)->update($input); 
        Alert::success('Actualizo correctamente la orden de Trabajo!')->persistent("Close");

        //return redirect()->route('wo.index');
        return back();
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\wo  $wo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destruir=DB::table('wo')->where('id', '=', $id)->delete();
       Alert::success('Eliminó correctamente la orden de trabajo!'.$id)->persistent("Close");
        return back();
    }
}
