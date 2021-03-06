<?php

namespace App\Console;

use App\Console\Commands\CountEventsCommand;
use App\Console\Commands\ParseCommand;
use App\Console\Commands\StopsCommand;
use App\Console\Commands\TotalTimeEventsCommand;
use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        ParseCommand::class,
        CountEventsCommand::class,
        TotalTimeEventsCommand::class,
        StopsCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //
    }
}
