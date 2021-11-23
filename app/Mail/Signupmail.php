<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Signupmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('send.mailtest.2021@gmail.com','幼児学習サイト『ぷちはぐ』')
                    ->subject('会員登録完了のお知らせ')
                    ->view('emails.signupmail')
                    ->with([
                        'email' => $this->email,
                    ]);
    }
}
