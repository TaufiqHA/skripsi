<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CheckUserRole
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event): void
    {
        if($event->user->role_id === '1')
        {
            Mahasiswa::create(['user_id' => $event->user->id]);
        } else if($event->user->role_id === '2')
        {
            Dosen::create(['user_id' => $event->user->id]);
        }
    }
}
