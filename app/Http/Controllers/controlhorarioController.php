<?php

namespace App\Http\Controllers;

use App\controlhorario;
use App\escolta;
use App\ordenesdeservicio;
use App\estadoservicio;
use App\wo;
use App\cliente;
use App\estadocontrolhorario;
use App\vehiculo;
use App\User;
use App\tipodevehiculo;
use App\tiposervicio;
use App\solicitanteinterno;
use App\Mail\servicioadd;
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
use PDF;
use App\Notifications\notificacionservicio;

class controlhorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $controlhorario = controlhorario::search($request->nombre)->orderBy('Fecha_Registro', 'desc')->paginate(10);
      $escolta = escolta::orderBy('nombre','ASC')->pluck('nombre','id');
      $estadocontrolhorario = estadocontrolhorario::pluck('estadocontrol','id');
   return view('controlhorario.index',compact('controlhorario','escolta','estadocontrolhorario'));
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
       //dd($request-> all()); 
      $controlhorario =  new controlhorario($request-> all());
      $controlhorario->save();
  Alert::success('', 'el controlhorario ha sido registrado con exito !')->persistent('Close');
  return redirect()->route('controlhorario.index');
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
        $controlhorario = controlhorario::find($id);
        return view('controlhorario.edit',compact('$controlhorario'));

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
        //dd($request->all());
      $controlhorario = controlhorario::findOrFail($request->id);
 $controlhorario->update($request->all());
        Alert::success('Good job!');
      Alert::success('', 'el controlhorario ha sido editado con exito !')->persistent('Close');
      return redirect()->route('controlhorario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $controlhorario = controlhorario::find($id);
          $controlhorario->delete();
            Alert::success('', 'el controlhorario ha sido sido borrado de forma exita!')->persistent('Close');
            return redirect()->route('controlhorario.index');
    }
}
