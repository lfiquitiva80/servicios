<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ordenesdeservicio;
use App\documento;

use Alert;





class documentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear($id)
    {
        $data = documento::all();
        $edit= ordenesdeservicio::findOrFail($id);
        foreach ($data as $key => $value) {
            if ($value->id_ordendeservicio == $id ) {
                return redirect('documento/'.$value->id.'/edit');
            }
            
        }
        return view('documento.create', compact('edit'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $data =  new documento ($request-> all());
        $data->id_users = Auth::user()->id;
        $data->save();
        Alert::success('', 'La información  ha sido registrada  con exito!')->persistent('Close');
        return redirect('documento/'.$data->id.'/edit');
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
        $edit= documento::findOrFail($id);
        $date = date_create($edit->fecha_hora);
        $datetime =date_format($date,"Y-m-d\TH:i:s");
        return view('documento.edit', compact('edit','datetime'));
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
        $data = documento::findOrFail($id);
        $data->id_users = Auth::user()->id;
        $data->update($request->all());
        Alert::success('', 'La información  ha sido registrada  con exito!')->persistent('Close');
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
        //
    }
}
