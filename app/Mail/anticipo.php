<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\ordenesdeservicio;


class anticipo extends Mailable
{
    use Queueable, SerializesModels;
   public $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request =$request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $ordendeservicio =ordenesdeservicio::find($this->request->id);
        

         return $this->markdown('emails.anticipo')->subject('LA ORDEN DE SERVICIO: '.$ordendeservicio->No_de_orden_de_servicio.' SOLICITA UN ANTICIPO')->with([
             'id' => $this->request->id,
             'numero' => $ordendeservicio->No_de_orden_de_servicio,
             'Estado' => $this->request->estadoservicio_id,
             'fechaincio' => $this->request->fecha_inicio_servicio,
             'fecha_solicitud'=>$this->request->fecha_solicitud,
             'Escolta' => $this->request->Escolta_asignado,
             'Vehiculo'=>$this->request->placa,
             'Cliente'=>$this->request->cliente,
             'solicitante'=>$this->request->solicitante_interno2,
             'detalle_del_servicio'=> $this->request->detalle_del_servicio,
         ]);
    }
}
