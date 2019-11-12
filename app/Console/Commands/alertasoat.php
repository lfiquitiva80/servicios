<?php

namespace App\Console\Commands;

use App\Mail\soatalerta;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Console\Command;
use Carbon\Carbon;
use App\vehiculo;
use Illuminate\Support\Facades\DB;



class alertasoat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alerta:soat';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar un correo para alertar veinte dias antes de la fecha soat';

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
      
      $fecha = Carbon::now()->subDays(20)->format('Y/m/d');
      $fecha_soat= vehiculo::where('fecha_soat',$fecha)->get();
      foreach ($fecha_soat as $key => $value) {
       
        if ($value->evento_uno == 0) {
  
         
           $hoy= DB::table('vehiculo')
              ->where('id', $value->id)
             ->update(array('evento_uno' => 1));
            
          \Mail::to('rarivola@easyemail.info')->send(new soatalerta($value));
        
        }

      }
    }
}
