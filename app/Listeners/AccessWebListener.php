<?php

namespace App\Listeners;

use App\Events\AccessWebEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Session;
class AccessWebListener
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
     * @param  AccessWebEvent  $event
     * @return void
     */
    public function handle(AccessWebEvent $event)
    {
        $setting = $event->setting;
        if(rand(0,9)>=6){
            $setting->web_visitday = $setting->web_visitday + 1;
            $setting->save();
            //visit today
            $web_visitday = str_split($setting->web_visitday);
            if(count($web_visitday)==1){
                array_unshift($web_visitday,'0','0');
            }
            if(count($web_visitday)==2){
                array_unshift($web_visitday,'0');
            }
            Session::put('web_visitday',$web_visitday);
            //dathen today
            if(rand(0,9)>=6){
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
        return true;
    }
}
