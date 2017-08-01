<?php

namespace App\Mail;

use App\Application;
use App\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPhone extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct(Application $data)
    {
        $this->phone = Setting::where('name', 'phone')->first();
        $this->mail = 'dbcb67cd3699e@stomatology.mainsms.ru';
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->mail, 'Стоматология АПЕКС')
            ->subject($this->phone->value)
            ->view('emails.phone');
    }
}
