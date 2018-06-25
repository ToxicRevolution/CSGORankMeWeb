<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class VacStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'VacStatus:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $VacStatus = app()->make("App\Http\Controllers\Tracker\VacStatus");
        app()->call([$VacStatus, 'HandlePlayerBans']);
    }
}
