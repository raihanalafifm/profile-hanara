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
        // Kirim notifikasi ke SEMUA user (admin dan user biasa)
        $allUsers = User::all();

        foreach ($allUsers as $user) {
            // Kirim ke setiap user dengan nama mereka masing-masing
            Mail::to($user->email)->send(
                new AdminLoginNotification($user->name, $event->user, $event->loginTime, $event->ipAddress, $event->userAgent)
            );
        }
    }
}
