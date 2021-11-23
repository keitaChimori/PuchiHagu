<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($encryption_email)
    {
        $this->encryption_email = $encryption_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('send.mailtest.2021@gmail.com','幼児学習サイト『ぷちはぐ』')
                    ->subject('パスワード再設定について')
                    ->view('emails.passwordresetmail')
                    ->with([
                        'email' => $this->encryption_email,
                    ]);
    }
}
