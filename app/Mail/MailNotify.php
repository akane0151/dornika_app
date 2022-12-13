<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "کد فعال سازی";
    public $token;
    public $userId;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token,$userId)
    {
        //
        //$this->subject = $subject;
        $this->token = $token;
        $this->userId = $userId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mailNotify',["token"=>$this->token,"userId"=>$this->userId]);
    }
}
