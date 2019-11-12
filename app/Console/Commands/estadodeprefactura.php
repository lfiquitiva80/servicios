<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\ordenesdeservicio;
use App\prefacturaoxy;


class Estadodeprefactura extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Ordendeservicioprefacturacion';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'estado de prefacturacion de la orden de servicio';

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
                      


    }
}
