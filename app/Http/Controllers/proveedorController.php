<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;
use Alert;
use DataTables;


class proveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        
        return view('proveedor.index');
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
        $proveedores =  new proveedor($request-> all());
       
        $proveedores->save();
        Alert::success('', 'el proveedor ha sido sido registrado con exito!')->persistent('Close');
        return redirect()->route('proveedores.index');
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
        $request->id;
        $proveedores = proveedor::find($request->id);
        $proveedores->fill($request->all());
        $proveedores->save();
          
        Alert::success('', 'el proveedor ha sido sido editado con exito! !')->persistent('Close');
        

        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $proveedores = proveedor::find($id);
         $proveedores->delete();
         Alert::success('', 'el proveedor ha sido sido borrado de forma exita!')->persistent('Close');
         return redirect()->route('proveedores.index');
    }
    public function tabla(){

        $proveedores = proveedor::all();
        return Datatables::of($proveedores)
        ->addColumn('botones' , 'proveedor.actions')
        ->addColumn('destroy' , 'proveedor.destroy')       
        ->rawColumns(['botones','destroy'])
        ->toJson();
    }
}
