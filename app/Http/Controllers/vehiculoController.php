<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehiculo;
use Alert;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\alertaslicencia;
use App\proveedor;


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
     
     $proveedor =proveedor::pluck('nombre','id'); 
      return view('vehiculo.create',compact('proveedor'));

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
        if ($request->hasFile('documento_soat')) {

          
          
              //$documento_soat = '/storage'.'/'.$request->file('documento_soat')->store('public/soat');
             $documento_soat1 = $request->file('documento_soat')->store('soat');
            
             $Vehiculo->documento_soat = $documento_soat1;
            
        }
        if ($request->hasFile('documento_licencia')) {
    
              //$documento_licencia = '/storage'.'/'.$request->file('documento_licencia')->store('licencia de transito');
              $documento_licencia1 =$request->file('documento_licencia')->store('licencia_de_transito');
              $Vehiculo->documento_licencia = $documento_licencia1;
        }

        if ($request->hasFile('documento_poliza')) {

              //$documento_poliza = '/storage'.'/'.$request->file('documento_poliza')->store('public/POLIZA');
              $documento_poliza1 = $request->file('documento_poliza')->store('poliza');
              $Vehiculo->documento_poliza  = $documento_poliza1;
        }

        if ($request->hasFile('documento_tecnomecanica')) {      
              //$documento_poliza = '/storage'.'/'.$request->file('documento_tecnomecanica')->store('public/TECNICO MECANICA');
              $documento_poliza1 = $request->file('documento_tecnomecanica')->store('tecnico_mecanica');
              $Vehiculo->documento_tecnomecanica  = $documento_poliza1;
        }
        if ($request->hasFile('documento_blindaje')) {      
          //$documento_poliza = '/storage'.'/'.$request->file('documento_tecnomecanica')->store('public/TECNICO MECANICA');
          $documento_blindaje1 = $request->file('documento_blindaje')->store('blindaje');
          $Vehiculo->documento_blindaje  = $documento_blindaje1;

    }
           

            $Vehiculo->save();
         
            Alert::success('', 'el vehiculo ha sido sido registrado con exito! !')->persistent('Close');
            
           

           return redirect()->route('Vehiculo.index');
           
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
      $proveedor =proveedor::pluck('nombre','id'); 
       
        return view('vehiculo.edit',compact('Vehiculo','proveedor'));
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
      $Vehiculo->fill($request->all());
       if ($request->hasFile('foto')) {
        $Fotos = '/storage'.'/'.$request->file('foto')->store('public/vehiculo');
        $imagen_vehiculo = '/storage'.'/'.$request->file('foto')->store('vehiculo');
        $Vehiculo->foto = $imagen_vehiculo;
       

                       }
                       if ($request->hasFile('documento_soat')) {

          
          
                        //$documento_soat = '/storage'.'/'.$request->file('documento_soat')->store('public/soat');
                       $documento_soat1 = $request->file('documento_soat')->store('soat');
                      
                       $Vehiculo->documento_soat = $documento_soat1;
                      
                  }
                  if ($request->hasFile('documento_licencia')) {
              
                        //$documento_licencia = '/storage'.'/'.$request->file('documento_licencia')->store('licencia de transito');
                        $documento_licencia1 =$request->file('documento_licencia')->store('licencia_de_transito');
                        $Vehiculo->documento_licencia = $documento_licencia1;
                  }
          
                  if ($request->hasFile('documento_poliza')) {
          
                        //$documento_poliza = '/storage'.'/'.$request->file('documento_poliza')->store('public/POLIZA');
                        $documento_poliza1 = $request->file('documento_poliza')->store('poliza');
                        $Vehiculo->documento_poliza  = $documento_poliza1;
                  }
          
                  if ($request->hasFile('documento_tecnomecanica')) {      
                        //$documento_poliza = '/storage'.'/'.$request->file('documento_tecnomecanica')->store('public/TECNICO MECANICA');
                        $documento_tecno1 = $request->file('documento_tecnomecanica')->store('tecnico_mecanica');
                        $Vehiculo->documento_tecnomecanica  = $documento_tecno1;
                  } 
                  if ($request->hasFile('documento_blindaje')) {      
                    //$documento_poliza = '/storage'.'/'.$request->file('documento_tecnomecanica')->store('public/TECNICO MECANICA');
                    $documento_blindaje1 = $request->file('documento_blindaje')->store('blindaje');
                    $Vehiculo->documento_blindaje  = $documento_blindaje1;

              }     
              
              $fecha = Carbon::now()->subDays(20)->format('Y/m/d');
              if ($fecha != $request->fecha_soat && $request->fecha_soat != $fecha){
                $Vehiculo->evento_uno = 0;
              }

              if ($fecha != $request->fecha_licencia && $request->fecha_licencia != $fecha){
                $Vehiculo->evento_dos = 0;
              }

              if ($fecha != $request->fecha_poliza && $request->fecha_poliza != $fecha){
                $Vehiculo->evento_tres = 0;
              }
              if ($fecha != $request->fecha_tecnomecanica && $request->fecha_tecnomecanica != $fecha){
                $Vehiculo->evento_cuatro = 0;
              }
            //  if(strtotime($request->fecha_soat )>strtotime($Vehiculo->fecha_soat)) {
            //   $Vehiculo->evento_uno = 0;
            //  }
               
            
            // if (strtotime($request->fecha_licencia)>strtotime($Vehiculo->fecha_licencia)) {
            //   $Vehiculo->evento_dos = 0;
            // }    
            // if (strtotime($request->fecha_poliza)>strtotime($Vehiculo->fecha_poliza)) {
            //   $Vehiculo->evento_tres = 0;
            // }
            // if (strtotime($request->fecha_tecnomecanica)>strtotime($Vehiculo->fecha_tecnomecanica )) {
            //   $Vehiculo->evento_cuatro = 0;
            // }
           
          
           $Vehiculo->save();
          
             Alert::success('', 'el vehiculo ha sido sido editado con exito! !')->persistent('Close');
             

             return redirect()->route('Vehiculo.index');
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
         return redirect()->route('Vehiculo.index');
    }

    public function pdf($id){
      $Vehiculo= vehiculo::findOrFail($id);
       $pdf = PDF::loadView('vehiculo.pdf',compact('Vehiculo'))->setPaper('A4', 'landscape');
      return $pdf->stream('Presentacion_Vehiculo.pdf');
    }

    public function soat ($id){
      $Vehiculo= vehiculo::findOrFail($id);
     
      return Storage::download("$Vehiculo->documento_soat");
    }
    public function licencia ($id){
      $Vehiculo= vehiculo::findOrFail($id);
     
      return Storage::download("$Vehiculo->documento_licencia");
    }
    public function poliza ($id){
      $Vehiculo= vehiculo::findOrFail($id);
     
      return Storage::download("$Vehiculo->documento_poliza");
    }
    public function tecnomecanica ($id){
      $Vehiculo= vehiculo::findOrFail($id);
     
      return Storage::download("$Vehiculo->documento_tecnomecanica");
    }
    public function blindaje ($id){
      $Vehiculo= vehiculo::findOrFail($id);
     
      return Storage::download("$Vehiculo->documento_blindaje");
    }

}
