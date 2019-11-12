<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\ordenesdeservicio;
use App\estadoservicio;
use App\User;
use App\cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Datatables;
use Alert;
use Yajra\DataTables\Html\Builder;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index(Request $request)
    {

   
        Log::info('Ingreso a al Sistema Command Center: '. Auth::user()->name);
        $estadoservicio = estadoservicio::pluck('estadoservicio','id');
        $cliente = cliente::orderBy('Nombre','asc')->pluck('Nombre','id');

        $hoy = new Carbon();
        $index = ordenesdeservicio::search($request->nombre)->orderBy('id', 'desc')->paginate(15);

        return view('home',compact('index','estadoservicio','cliente','hoy'));

    }

    
    public function fecha(Request $request){
    
      $index=ordenesdeservicio::search1($request->fecha_inicio_servicio)->orderBy('id', 'desc')->paginate(50);
      Log::info('Ingreso a las ordenes de servicio: '. Auth::user()->name);
      $estadoservicio = estadoservicio::pluck('estadoservicio','id');
      $cliente = cliente::orderBy('Nombre','asc')->pluck('Nombre','id');

      $hoy = new Carbon();

        return view('home',compact('index','estadoservicio','cliente','hoy'));
    }
}
