<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class registerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('notifymail0115@gmail.com')
            ->subject('Registeration Mail')
            ->view('mails.register')
            ->with([
                'uid' => $this->data['uid'],
                'spid' => $this->data['spid'],
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'phone' => $this->data['phone'],
                'password' => $this->data['password'],
                'date' => $this->data['created_at'],
            ]);
    }
}
