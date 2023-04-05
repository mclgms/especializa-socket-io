<?php

namespace App\Listeners;

use App\Events\PostCreated;

class NotifyUserNewPostCreated
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
    public function handle(PostCreated $event): void
    {
        var_dump($event);
    }
}
