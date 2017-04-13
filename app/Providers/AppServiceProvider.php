<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Setting;
use View;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        View::share('setting',Setting::first());
        if(!Session::has('web_visitday')){
            Session::put('web_visitday',[0,8,9]);
        }
        if(!Session::has('web_dathen')){
            Session::put('web_dathen',[1,6]);
        }
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        //
    }
}
