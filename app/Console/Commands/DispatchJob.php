<?php

namespace App\Console\Commands;

use App\Jobs\ReproJob;
use Illuminate\Console\Command;
use function dispatch;

class DispatchJob extends Command
{
    protected $signature = 'dispatch';

    protected $description = '';

    public function handle()
    {
        for ($x = 0; $x < 10; $x++) {
            dispatch(new ReproJob());
        }
    }
}
