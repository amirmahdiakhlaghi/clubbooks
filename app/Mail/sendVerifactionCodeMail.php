<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class sendVerifactionCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $email;
    public $username;
    public $verified_code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->email = $user->email;
        $this->username = $user->username;
        $this->verified_code = $user->verified_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->email;
        $verified_code = $this->verified_code;
        $username = $this->username;
        return $this->view('send-verifaction-email',['email' => $email,'verified_code' => $verified_code , 'username' => $username])->from('amirmahdiakhi@gmail.com','clubBookCodeVerify')->subject('ارسال کد فعالسازی');
        // return $this->text('sen');
    }
}
