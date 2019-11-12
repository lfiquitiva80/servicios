<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lnegocio;
use App\puc;
use App\ot;
use App\proveedor;
use App\c_costo;
use App\provision;
use App\cliente;
use App\estadofacturacion;
use Alert;

use DataTables;



class provisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedor =proveedor::pluck('nit','id'); 

        $costo = c_costo::query()
        ->join('cliente','cliente.id','=','centro_de_costos.id_cliente')
        ->select(['cliente.nit','cliente.nombre as nombre','centro_de_costos.id'])
        ->pluck('cliente.nit','centro_de_costos.id');
        
        $ot = ot::pluck('nombre','id'); 
        $puc =puc::pluck('descripcion','id');
        $estadofacturacion = estadofacturacion::query()
                            ->where('estado','REVISIÓN')
                            ->pluck('estado','id');

       $lnegocio = lnegocio::pluck('prefijo','id'); 
       return view('provision.index',compact('proveedor','costo','ot','puc','estadofacturacion','lnegocio'));

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
        $provision =  new provision($request-> all());
       
        $provision->save();
        Alert::success('', 'la provisión ha sido registrada  con exito!')->persistent('Close');
        return redirect()->route('provision.index');
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
     * @param  \Illuminate\Http\Request  $request}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $provision = provision::findOrFail($request->id);
      $provision->update($request->all());
      Alert::success('', 'la provisión ha sido actualizada con exito !')->persistent('Close');
      return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provision = provision::find($id);
        $provision->delete();
        Alert::success('', 'la provisión ha sido eliminada de forma exita!')->persistent('Close');
        return redirect()->route('provision.index');
    }
    public function tablaindex()
    {
        $provision = provision::query()
         ->select(['provision.id as id','provision.id_proveedor as id_proveedor','proveedores.nombre as nombreproveedor','centro_de_costos.id as id_costos','cliente.nombre as nombrecliente','centro_de_costos.centro_de_costos as centrocostos','provision.id_ot','ot.cc','provision.id_puc as id_puc','puc.descripcion as descripcion','puc.cuenta as puc_cuenta','provision.detalle as detalle','provision.valor','provision.mes','estado_facturacion.id as estadofacturacion','linea_de_negocio.id as linea_de_negocioid'])
        
         ->leftJoin('proveedores','proveedores.id','=','provision.id_proveedor')
         ->leftJoin('centro_de_costos','centro_de_costos.id','=','provision.id_centro_de_costos')
         ->leftJoin('cliente','cliente.id','=','centro_de_costos.id_cliente')
         ->leftJoin('ot','ot.id','=','provision.id_ot')
         ->leftJoin('puc','puc.id','=','provision.id_puc')
         ->leftJoin('linea_de_negocio','linea_de_negocio.id','=','provision.id_lineadenegocio')
         ->leftJoin('estado_facturacion','estado_facturacion.id','=','provision.id_estadofacturacion');
          

         return Datatables::of($provision)
         ->addColumn('botones' , 'provision.actions' )  
         ->addColumn('duplicar' , function ($provision)  {
              return '<a href="duplicarprovision/'.$provision->id.'"  class="btn btn-primary btn-sm" title="Duplicar" onclick="return confirm('."'Desea duplicar el registro actual ?'".')"><i class="fa fa-clone" aria-hidden="true"></i> Duplicar</a>';
             })  
         ->addColumn('destroy' , 'provision.destroy' )       
         ->rawColumns(['botones','duplicar','destroy'])
         ->toJson();
    }
    public function proveedores()
    {
      $row=proveedor::all();
      return response()->json($row);
    }

    public function costos()
    {
     
      
      $data = c_costo::query()
        ->join('cliente','cliente.id','=','centro_de_costos.id_cliente')
        ->select(['cliente.nit','cliente.nombre as nombre','centro_de_costos.id','centro_de_costos.centro_de_costos'])
        ->get();
        return response()->json($data);
    }
    public function ots()
    {
      $dts=ot::all();
      return response()->json($dts);

    }
    public function pucs()
    {
        $datos=puc::all();
        return response()->json($datos);
    }
    public function lineadenegocio()
    {
        $dato=lnegocio::all();
        return response()->json($dato);
    }
    public function revision()
    {
        $proveedor =proveedor::pluck('nit','id'); 

        $costo = c_costo::query()
        ->join('cliente','cliente.id','=','centro_de_costos.id_cliente')
        ->select(['cliente.nit','cliente.nombre as nombre','centro_de_costos.id'])
        ->pluck('cliente.nit','centro_de_costos.id');
        
        $ot = ot::pluck('nombre','id'); 
        $puc =puc::pluck('descripcion','id');
        $estadofacturacion = estadofacturacion::query()
                            ->pluck('estado','id');

       $lnegocio = lnegocio::pluck('prefijo','id'); 
       return view('revisionprovision.index',compact('proveedor','costo','ot','puc','estadofacturacion','lnegocio'));

    }


        public function duplicar($id)
    {
        $data = provision::findOrFail($id);

        $newTask = $data->replicate();
        $newTask->save();
        //dd($data);

        return redirect()->route('provision.index');
    }
}
