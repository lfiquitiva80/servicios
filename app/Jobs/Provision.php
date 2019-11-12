<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Maatwebsite\Excel\Writer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Exports\excelordenesExport;
use Maatwebsite\Excel\Facades\Excel;



class Provision implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    //public $type;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->type = $type;
     //$this->excelordenesExport = $excelordenesExport;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
     Excel::store(new excelordenesExport,'OrdenesDeServcio.xlsx', 'public');

      //Alert::success('', 'Excel se descargar prontamente !')->persistent('Close');
      //otification::route('descargraexcel', 'taylor@example.com');
     

      
                  //->route('descargraexcel');
      //return redirect()->action('excelController@descargar');
       // Excel::download(new excelordenesExport, 'OrdenesDeServcio.xlsx');
      // return (new excelordenesExport)->store('OrdenesDeServcio.xlsx','public');
        //return new excelordenesExport();
        // $this->excelordenesExport->download('invoices.xls');
       return back()->withSuccess('GOOD');
      
    }
}
