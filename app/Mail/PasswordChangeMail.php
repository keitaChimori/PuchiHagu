<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordChangeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $new_password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($new_password)
    {
        $this->new_password = $new_password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('send.mailtest.2021@gmail.com','幼児学習サイト『ぷちはぐ』')
                    ->subject('パスワード変更完了のお知らせ')
                    ->view('emails.passwordchangemail')
                    ->with([
                        'password' => $this->new_password,
                    ]);
    }
}
