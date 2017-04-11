<?php

namespace App\Listeners;

use App\Events\ViewSumEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Setting;
class ViewSumListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ViewSumEvent  $event
     * @return void
     */
    public function handle(ViewSumEvent $event)
    {
        $setting = $event->setting;
        $setting->web_visitday = $setting->web_visitday + 1;
        $setting->save();
    }
}
