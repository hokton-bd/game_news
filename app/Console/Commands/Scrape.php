<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Scrape extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'スクレイピングをします';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Scrape::run();
        return 0;
    }
}
