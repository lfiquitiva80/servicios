<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estadoservicio;
use App\ordenesdeservicio;
use App\servicios_adicionales;
use App\servicios_adicionales_occidental;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Datatables;
use Alert;


class excelController extends Controller
{


   

    public function excelordenes($type)
    {
        

        $index = ordenesdeservicio::all();

       return \Excel::create('ordenes_de_servicio', function($excel) use ($index) {

            $excel->sheet('sheet name', function($sheet) use ($index)

            {

                $sheet->fromArray($index);

            });

        })->download($type);


    }


      public function excelordenesservicios($type)
    {
        

        $index = servicios_adicionales::all();;

       return \Excel::create('servicios_adicionales', function($excel) use ($index) {

            $excel->sheet('sheet name', function($sheet) use ($index)

            {

                $sheet->fromArray($index);

            });

        })->download($type);


    }


      public function excelordenesoccidental($type)
    {
        

        $index = servicios_adicionales_occidental::all();;

       return \Excel::create('occidental', function($excel) use ($index) {

            $excel->sheet('sheet name', function($sheet) use ($index)

            {

                $sheet->fromArray($index);

            });

        })->download($type);


    }




}
