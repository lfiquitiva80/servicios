<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\escolta;
use Alert;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use PDF;

class escoltaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $Escolta= escolta::search($request->nombre)->orderBy('nombre', 'asc')->paginate(10);
   return view('Escolta.index',compact('Escolta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('escolta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
$Escolta =  new escolta($request-> all());
if ($request->hasFile('foto')) {

                  $Fotos = '/storage'.'/'.$request->file('foto')->store('public/escolta');
                  $imagen = '/storage'.'/'.$request->file('foto')->store('escolta');
                  $Escolta->foto  = $imagen;
                }
                  if($request->file == null ) {
                    $defaul = 'default.jpg';
                    $Escolta->foto  =$defaul;
                    }
          $Escolta->save();
          Alert::success('', 'el escolta ha sido registrado con exito !')->persistent('Close');
          return redirect()->route('Escolta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Escolta = escolta:: find($id);
        return view('escolta.edit',compact('Escolta'));
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

      $Escolta = escolta:: find($id);
       $Escolta->fill($request->all());
      ///   if($request->file()){
      //  $Escolta->foto  = $request->file('foto')->store('public/escolta');
      //}


      if ($request->hasFile('foto')) {

                        $rutaimagen = '/storage'.'/'.$request->file('foto')->store('public/escolta');
                        $Ruta = '/storage'.'/'.$request->file('foto')->store('escolta');
                        $Escolta->foto  = $Ruta;
                      }



      $Escolta->save();
             Alert::success('', 'el escolta ha sido sido editado con exito! !')->persistent('Close');
            return redirect()->route('Escolta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Escolta = escolta::find($id);
       $Escolta->delete();
         Alert::success('', 'el escolta ha sido sido borrado de forma exita!')->persistent('Close');
         return redirect()->route('Escolta.index');
    }

    public function automatico(Request $request){
      $data=escolta::select('cc','id')->get();
        return response()->json($data);
    }

    public function allescoltas(Request $request){
      $data=escolta::all();
        return response()->json($data);
    }
    public function pdf($id){
      $Escolta= escolta::findOrFail($id);
       $pdf = PDF::loadView('escolta.pdf',compact('Escolta'))->setPaper('A4', 'landscape');
      return $pdf->stream('Presentacion_Escolta.pdf');
    }
}
