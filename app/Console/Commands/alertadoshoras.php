<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\ordenesdeservicio;
use App\Mail\alertaservicios;
use Carbon\Carbon;

class alertadoshoras extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alert:doshoras';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia un correo para alertar menos dos horas un servicio';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
    
    $lastWeek = Carbon::now()->subWeek();       
    $ordenesdeservicio= ordenesdeservicio::where('fecha_inicio_servicio','>',$lastWeek)->get();
    

                    foreach ($ordenesdeservicio as $key => $value) {

                       //Log::info(\Carbon\Carbon::parse($value->fecha_inicio_servicio)->diffInMinutes());
                       // Log::info('enviar el correo =>'.$value->No_de_orden_de_servicio.'-'. $lastWeek.'-'.\Carbon\Carbon::parse($value->fecha_inicio_servicio)->diffInRealMinutes());

         if ($value->fecha_inicio_servicio > \Carbon\Carbon::now()){

            if (\Carbon\Carbon::parse($value->fecha_inicio_servicio)->diffInRealMinutes() > 118 && \Carbon\Carbon::parse($value->fecha_inicio_servicio)->diffInRealMinutes() <= 120 && $value->estadoservicio_id != 7) {
                            Log::info('enviar el correo =>'.$value->No_de_orden_de_servicio.'-'. $lastWeek.'-'.$ordenesdeservicio->count());

                            $store=ordenesdeservicio::find($value->id);

                            try {
                                
                           \Mail::to('planeacioncc@omnitempus.com')->send(new alertaservicios($store));             
                               Log::info('Se envio correo de Alerta Dos Horas');

                            } catch (Exception $e) {
                                
                                Log::info('No se envio correo de Alerta Dos Horas');
                            }

                            
                        }

         }  //Termina el primer if              
                                               
                    }//Termina el foreach
    }
}
