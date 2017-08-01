<?php

namespace App\Mail;

use App\Application;
use App\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     *
     */
    public $data;

    public function __construct(Application $data)
    {
        $this->mail = Setting::where('name', 'email')->first();
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from($this->mail->value, 'Стоматология АПЕКС')
                    ->subject('Новая заявка с сайта '.$_SERVER['SERVER_NAME'])
                    ->view('emails.send');
    }
}
