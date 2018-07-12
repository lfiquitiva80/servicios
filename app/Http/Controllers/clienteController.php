<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
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
      $Cliente = cliente::search($request->nombre)->orderBy('id', 'DSC')->paginate(10);
   return view('cliente.index',compact('Cliente'));
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
}
