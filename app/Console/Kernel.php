<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        \App\Console\Commands\ResetVisit::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        //$schedule->call(function () {
            // $mysetting = Setting::find(1);
            // $mysetting->web_tuvan ++;
            // $mysetting->web_dathen ++;
            // $mysetting->save();
            // DB::table('setting')
            //     ->where('id', 1)
            //     ->update(['web_tuvan' => 99,'web_dathen' => 12]);
        //})->everyMinute();
        $schedule->command('reset:visit')
             ->everyMinute();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
