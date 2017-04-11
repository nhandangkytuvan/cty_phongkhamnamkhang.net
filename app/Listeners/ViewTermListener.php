<?php

namespace App\Listeners;

use App\Events\ViewTermEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\View;
class ViewTermListener
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
     * @param  ViewTermEvent  $event
     * @return void
     */
    public function handle(ViewTermEvent $event)
    {
        $term_id = $event->term->id;
        if($view_term = View::where('term_id',$term_id)->first()){
            $view_term->view_sum = $view_term->view_sum + 1;
        }else{
            $view_term = new View;
            $view_term->term_id = $term_id;
            $view_term->view_sum = 0;
        }
        $view_term->save();
    }
}
