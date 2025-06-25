<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use App\Mail\AdminLoginNotification;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendAdminLoginNotification
{
    public function handle(UserLoggedIn $event)
    {
        $adminEmail = 'abdul.hamied@hanara.id';
        $adminName = 'Abdul Hamied';

        Mail::to($adminEmail)->send(
            new AdminLoginNotification($adminName, $event->user, $event->loginTime, $event->ipAddress, $event->userAgent)
        );
    }
}
