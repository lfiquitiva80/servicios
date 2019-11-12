<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class servicioadd extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;


    public $store;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($store)
    {
         $this->store = $store;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->store);
        return $this->markdown('emails.servicioadd.servicioadd')->subject('Servicio Adicional Command Center '.$this->store->ciudad_destino.' # Orden de Trabajo: '.$this->store->No_de_orden_de_servicio)->with([
                        'estado' => $this->store->estadoservicio_id,
                        'cliente' => $this->store->cliente,
                        'ciudad_destino' => $this->store->ciudad_destino,
                        'fecha_solicitud' => $this->store->fecha_solicitud,
                        'fecha_inicio_servicio' => $this->store->fecha_inicio_servicio,
                        'detalle_del_servicio' => $this->store->detalle_del_servicio,
                        'users_id' => $this->store->users_id,
                        'id' => $this->store->id,
                        'wo' => $this->store->No_de_orden_de_servicio,
                    ]);
    }
}
