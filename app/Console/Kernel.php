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
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // run hourly `php artisan inspire`.
        $schedule->command('inspire')
                  ->hourly();

        // run bash command `touch test.txt1 every 5 minutes.
        $schedule->exec('touch test.txt')
                ->everyFiveMinutes();

        // you can specify the time of day
        $schedule->command('php artisan cache:clear')->dailyAt('23:59');
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
