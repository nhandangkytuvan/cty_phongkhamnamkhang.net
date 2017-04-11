<?php

namespace App\Listeners;

use App\Events\VisitTermEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Visit;
class VisitTermListener
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
     * @param  VisitTermEvent  $event
     * @return void
     */
    public function handle(VisitTermEvent $event)
    {
        $term_id = $event->term->id;
        if($view_term = Visit::where('term_id',$term_id)->first()){
            $view_term->view_sum = $view_term->view_sum + 1;
        }else{
            $view_term = new Visit;
            $view_term->term_id = $term_id;
            $view_term->view_sum = 0;
        }
        $view_term->save();
    }
}
