<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminLoginNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $adminName;
    public $loginUser;
    public $loginTime;
    public $ipAddress;
    public $userAgent;

    public function __construct($adminName, User $loginUser, $loginTime, $ipAddress, $userAgent)
    {
        $this->adminName = $adminName;
        $this->loginUser = $loginUser;
        $this->loginTime = $loginTime;
        $this->ipAddress = $ipAddress;
        $this->userAgent = $userAgent;
    }

    public function build()
    {
        return $this->subject('Admin Login Alert for Your Hanara Account')
            ->view('emails.admin-login-notification');
    }
}
