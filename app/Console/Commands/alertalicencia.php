<?php

namespace App\Console\Commands;

use App\Mail\alertaslicencia;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;
use Carbon\Carbon;
use App\vehiculo;
use Illuminate\Support\Facades\DB;


class alertalicencia extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alerta:licencia';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar un correo para alertar veinte dias antes de la fecha de vencimiento del licencia de transito';

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
      $fecha_licencia= vehiculo::where('fecha_licencia',$fecha)->get();
      foreach ($fecha_licencia as $key => $value) {
        if ($value->evento_dos == 0) {
         
         $hoydos= DB::table('vehiculo')
            ->where('id', $value->id)
            ->update(array('evento_dos' => 1));
            
          \Mail::to('rarivola@easyemail.info')->send(new alertaslicencia($value));
        }
      }

    }
}
