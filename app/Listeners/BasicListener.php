<?php

namespace App\Listeners;

use App\Events\BasicEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BasicListener implements ShouldQueue
{
    public $connection = 'redis';

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
    public function handle(BasicEvent $event): void
    {
        sleep(30);
    }
}
