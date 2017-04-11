<?php

namespace App\Listeners;

use App\Events\ViewSumEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Setting;
use Session;
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
        if(!Session::has('use')){
            if(rand(0,9)>=3){
                $setting = $event->setting;
                $setting->web_visitday = $setting->web_visitday + 1;
                $setting->save();
                //visit today
                $web_visitday = Session::get('web_visitday');
                $web_visitday = implode('',$web_visitday)+1;
                $web_visitday = str_split($web_visitday);
                if(count($web_visitday)==1){
                    array_unshift($web_visitday,'0','0');
                }
                if(count($web_visitday)==2){
                    array_unshift($web_visitday,'0');
                }
                Session::put('web_visitday',$web_visitday);
                //dathen today
                if(rand(0,9)>=2){
                    $web_dathen = Session::get('web_dathen');
                    $web_dathen = implode('',$web_dathen)+1;
                    if($web_dathen>99){
                        $web_dathen = 99;
                    }
                    $web_dathen = str_split($web_dathen);
                    if(count($web_dathen)==1){
                        array_unshift($web_dathen,'0');
                    }
                    Session::put('web_dathen',$web_dathen);
                }
            }
        }
    }
}
