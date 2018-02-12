<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class myMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        //dd($this->data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('automatico@gjs.net.br','Comunidade Brasileiros Canadá')
                ->replyTo('contato@brasileiroscanada.com', 'Comunidade Brasileiros Canadá')
                ->subject('Novidades da Semana')
                ->view('emails.send');
    }
}
