<?php

namespace App\Console\Commands;

use App\Mail\alertaspoliza;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;
use Carbon\Carbon;
use App\vehiculo;
use Illuminate\Support\Facades\DB;

class alertapoliza extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alerta:poliza';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar un correo para alertar veinte dias antes de la fecha poliza';

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
      $fechapoliza= vehiculo::where('fecha_poliza',$fecha)->get();
      foreach ($fechapoliza as $key => $value) {
        if ($value->evento_tres == 0) {
         
         $hoy= DB::table('vehiculo')
            ->where('id', $value->id)
            ->update(array('evento_tres' => 1));
            
          \Mail::to('baxuyapuma@nextemail.net')->send(new alertaspoliza($value));
        }
        

      }
    }
}
