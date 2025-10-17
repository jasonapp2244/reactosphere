<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RandomPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $passwordPlain;

    public function __construct($user, $passwordPlain)
    {
        $this->user = $user;
        $this->passwordPlain = $passwordPlain;
    }

    public function build()
    {
        return $this->subject('Your Temporary Password')
                    ->markdown('user.mail.random_password')
                    ->with([
                        'name' => $this->user->name,
                        'email' => $this->user->email,
                        'password' => $this->passwordPlain,
                    ]);
    }
}
