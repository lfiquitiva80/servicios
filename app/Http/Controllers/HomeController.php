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

        $input = $request->all();

      
        Log::info('Ingreso a las ordenes de servicio: '. Auth::user()->name);
        $estadoservicio = estadoservicio::pluck('estadoservicio','id');

        $index = DB::table('ordenesdeservicio')->orderBy('id', 'desc')->paginate();

        //$users = User::select(['id','name','email','created_at','updated_at']);
        //dd($users);
        //return Datatables::of($users)->make();

        //dd($index);


        //return Datatables::of(ordenesdeservicio::all())->make(true);

        return view('home',compact('index','estadoservicio'));
       
    }
}