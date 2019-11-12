<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\wo; 
use App\escaner;

use Alert;

use DataTables;

class escanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $wo = wo::pluck('id','id');
        return view('escaner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  new escaner ($request-> all());
    
        if ($request->hasFile('ubicacion_archivo')) {
           $archivo = $request->file('ubicacion_archivo')->store('escaner');
           $data->ubicacion_archivo = $archivo;
         }


        $data->save();
        Alert::success('', 'el archivo se ha  guardado  con exito!')->persistent('Close');
        return redirect()->route('escaner.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        return view('escaner.create', compact('id'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //METODO PARA VER EL ARCHIVO
         $data= escaner::where('id_wo',$id)->get();
         foreach ($data as $key => $value) {
            return Storage::response("$value->ubicacion_archivo");

         }
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
        $data = escaner::findOrFail($request->id);
        if ($request->hasFile('ubicacion_archivo')) {
            $archivo = $request->file('ubicacion_archivo')->store('escaner');
            $data->ubicacion_archivo = $archivo;
          }
        $data->id_wo = $request->id_wo;
        $data->save();
    
        Alert::success('', 'el archivo ha sido actualizado con exito !')->persistent('Close');
        return redirect()->route('escaner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = escaner::find($id);
        Storage::delete("$data->ubicacion_archivo");
        $data->delete();
        Alert::success('', 'el archivo ha sido eliminado de forma exita!')->persistent('Close');
        return redirect()->route('escaner.index'); 
    }

    public function tablaindex()
    {
        $data =escaner::query()
        ->join('wo','wo.id','=','escaner.id_wo')
        ->select(['escaner.id','wo.id as idwo','escaner.ubicacion_archivo']);
        return Datatables::of($data)
        ->addColumn('edit' , 'escaner.actions')  
        ->addColumn('archivo', function($data){
            return '<a href="escaner/'.$data->idwo.'/edit"  class="btn btn-primary "  target="_blank" title="VER ARCHIVO"><span class="glyphicon  glyphicon-circle-arrow-down "></span> VER ARCHIVO</a>';
        })
        ->addColumn('destroy' , 'escaner.destroy')  
        ->rawColumns(['edit','archivo','destroy'])
        ->toJson();
    }
}
