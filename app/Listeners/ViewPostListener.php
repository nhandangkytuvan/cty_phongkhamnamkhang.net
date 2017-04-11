<?php

namespace App\Listeners;

use App\Events\ViewPostEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\View;
class ViewPostListener
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
     * @param  ViewPostEvent  $event
     * @return void
     */
    public function handle(ViewPostEvent $event)
    {
        $post_id = $event->post->id;
        if($view_post = View::where('post_id',$post_id)->first()){
            $view_post->view_sum = $view_post->view_sum + 1;
        }else{
            $view_post = new View;
            $view_post->post_id = $post_id;
            $view_post->view_sum = 0;
        }
        $view_post->save();
    }
}
