<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Setting;
class ResetVisit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset:visit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset number tu van , dat hen';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $mysetting = Setting::find(1);
        $mysetting->web_tuvan ++;
        $mysetting->web_dathen ++;
        $mysetting->save();
    }
}
