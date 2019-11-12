<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\cliente;
use App\User;
use App\estadoservicio;
use App\vehiculo;
use App\tipodevehiculo;
use App\tiposervicio;
use App\solicitanteinterno;
use App\wo;
use App\armas;
use App\c_costo;
use Alert;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $usuario = User::orderBy('email','asc')->pluck('email','id');  
      $costos= c_costo::pluck('centro_de_costos','id'); 
      $Cliente = cliente::search($request->nombre)->orderBy('nombre', 'asc')->paginate(10);
   return view('cliente.index',compact('Cliente','usuario','costos'));
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
      $Cliente =  new cliente($request-> all());
      $Cliente->save();
  Alert::success('', 'el cliente ha sido registrado con exito !')->persistent('Close');
  return redirect()->route('Clientes.index');
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
        $Cliente = cliente::find($id);
        return view('cliente.edit',compact('$Cliente'));

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
      $Cliente = cliente::findOrFail($request->id);
 $Cliente->update($request->all());
        Alert::success('Good job!');
      Alert::success('', 'el cliente ha sido editado con exito !')->persistent('Close');
      return redirect()->route('Clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Cliente = cliente::find($id);
          $Cliente->delete();
            Alert::success('', 'el cliente ha sido sido borrado de forma exita!')->persistent('Close');
            return redirect()->route('Clientes.index');
    }

    public function solicitudserviciocliente(Request $request)
    {
            
        $estadoservicio = estadoservicio::pluck('estadoservicio','id');
         $cliente = cliente::orderBy('Nombre','ASC')->pluck('Nombre','id');
         $vehiculo = vehiculo::orderBy('placa','ASC')->pluck('placa','id');
         $tipodevehiculo = tipodevehiculo::pluck('descripcion_tipo_vehiculo','id');
         $tiposervicio = tiposervicio::pluck('desc_tipo_serv','id');
         $solicitanteinterno = solicitanteinterno::pluck('descripcion_solicitante','id');
         $wo= wo::pluck('descripcion_wo','id');
         $armas= armas::pluck('descripcion','id');

        $cliente = cliente::orderBy('Nombre','asc')->where('usuario',\Auth::user()->id)->pluck('Nombre','id');
        $clientes = cliente::orderBy('Nombre','asc')->where('usuario',\Auth::user()->id)->first();
        //dd($clientes);
   return view('cliente.solicitud',compact('estadoservicio','cliente','clientes','tipodevehiculo','tiposervicio', 'armas'));      


    }
}
