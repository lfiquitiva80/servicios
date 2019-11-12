<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        
        Commands\alertadoshoras::class,
        Commands\alertasoat::class,
        Commands\alertatecnomecanica::class,
        Commands\alertapoliza::class,
        Commands\alertalicencia::class,
        

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('alert:doshoras')
                ->everyMinute();
                
        
    
         $schedule->command('alerta:soat')->everyMinute();	
         $schedule->command('alerta:licencia')->cron('*/2 * * * * *');
         $schedule->command('alerta:poliza')->everyMinute();
         $schedule->command('alerta:tecnomecanica')->cron('*/2 * * * * *');
         
         
         
         
        }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
