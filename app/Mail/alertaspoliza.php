<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class alertaspoliza extends Mailable
{
    public $value;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.poliza')->subject('[¡Alerta!] LA POLIZA DEL VEHICULO: '. $this->value->placa.' SE VENCE DENTRO DE 20 DIAS')->with([
            'id' => $this->value->id,
            'placa' => $this->value->placa,
            'fecha_soat' => $this->value->fecha_soat,
            'fecha_licencia' => $this->value->fecha_licencia,
            'fecha_poliza' => $this->value->fecha_poliza,
            'fecha_tecnomecanica' => $this->value->fecha_tecnomecanica,
            'fecha_blindaje' => $this->value->fecha_blindaje,
            'rentadora' => $this->value->rentadora,
            'tipo_de_rentadora' => $this->value->tipo_de_renta,
            'aramadura' => $this->value->armadura,
            'color' => $this->value->color  
        ]);
    }
}
