<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HumanInsider extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->Nombre='';
        $this->Apellidos='';
        $this->Email='';
        $this->Telefono='';
        $this->Mensaje='';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->markdown('emails.HumanInsider')
                    ->subject('¡Te han contactado desde human-mexico.com!')
                    ->with(['Nombre'=>$this->Nombre,
                    'Apellidos'=>$this->Apellidos,
                    'Email'=>$this->Email,
                    'Telefono'=>$this->Telefono,
                    'Mensaje'=>$this->Mensaje,]);
    }
}
