<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehiculo;
use Alert;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use PDF;

class vehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $Vehiculo = vehiculo::search($request->placa)->orderBy('id', 'DSC')->paginate(10);
   return view('Vehiculo.index',compact('Vehiculo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('vehiculo.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Vehiculo =  new vehiculo($request-> all());
        if ($request->hasFile('foto')) {

                          $Fotos = '/storage'.'/'.$request->file('foto')->store('public/vehiculo');
                          $imagen = '/storage'.'/'.$request->file('foto')->store('vehiculo');
                          $Vehiculo->foto  = $imagen;
                        }
                        if($request->file == null ) {
                          $car= 'car.png';
                          $Vehiculo->foto  = $car;
                          }
            $Vehiculo->save();
            Alert::success('', 'el vehiculo ha sido sido registrado con exito! !')->persistent('Close');
           return redirect()->route('Vehiculos.index');
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
      $Vehiculo = vehiculo:: find($id);
        return view('vehiculo.edit',compact('Vehiculo'));
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
      $Vehiculo  = vehiculo:: find($id);
       $Vehiculo ->fill($request->all());
       if ($request->hasFile('foto')) {

                         $auto = '/storage'.'/'.$request->file('foto')->store('public/vehiculo');
                         $movil = '/storage'.'/'.$request->file('foto')->store('vehiculo');
                         $Vehiculo->foto  = $movil;
                       }
      $Vehiculo->save();
             Alert::success('', 'el vehiculo ha sido sido editado con exito! !')->persistent('Close');
            return redirect()->route('Vehiculos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Vehiculo = vehiculo::find($id);
       $Vehiculo->delete();
         Alert::success('', 'el vehiculo ha sido sido borrado de forma exita!')->persistent('Close');
         return redirect()->route('Vehiculos.index');
    }

    public function pdf($id){
      $Vehiculo= vehiculo::findOrFail($id);
       $pdf = PDF::loadView('vehiculo.pdf',compact('Vehiculo'))->setPaper('A4', 'landscape');
      return $pdf->stream('Presentacion_Vehiculo.pdf');
    }
}
