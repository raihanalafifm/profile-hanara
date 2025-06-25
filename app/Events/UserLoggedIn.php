<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserLoggedIn
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $loginTime;
    public $ipAddress;
    public $userAgent;

    public function __construct(User $user, $ipAddress = null, $userAgent = null)
    {
        $this->user = $user;
        $this->loginTime = now();
        $this->ipAddress = $ipAddress;
        $this->userAgent = $userAgent;
    }
}
