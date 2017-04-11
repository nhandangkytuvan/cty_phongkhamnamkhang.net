<?php

namespace App\Listeners;

use App\Events\VisitPostEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Visit;
class VisitPostListener
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
     * @param  VisitPostEvent  $event
     * @return void
     */
    public function handle(VisitPostEvent $event)
    {
        $post_id = $event->post->id;
        if($view_post = Visit::where('post_id',$post_id)->first()){
            $view_post->view_sum = $view_post->view_sum + 1;
        }else{
            $view_post = new Visit;
            $view_post->post_id = $post_id;
            $view_post->view_sum = 0;
        }
        $view_post->save();
    }
}
