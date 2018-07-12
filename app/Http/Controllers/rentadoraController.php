<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rentadora;
use Alert;

class rentadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $Rentadora = rentadora::search($request->nombre)->orderBy('id', 'DSC')->paginate(10);
   return view('Rentadora.index',compact('Rentadora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $Rentadora =  new cliente($request-> all());
  $Rentadora->save();
  Alert::success('', ' ha sido registrado con exito !')->persistent('Close');
  return redirect()->route('Rentadora.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
      $Rentadora = rentadora::findOrFail($request->id);
      $Rentadora->update($request->all());

      Alert::success('', 'la rentadora  ha sido editado con exito !')->persistent('Close');
      return redirect()->route('Rentadora.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Rentadora = cliente::find($id);
       $Rentadora->delete();
         Alert::success('', 'la rentada  ha sido sido borrada con exito !')->persistent('Close');
         return redirect()->route('Rentadora.index');
    }
}
