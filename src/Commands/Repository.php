<?php

namespace LaravelCoreModule\ServiceRepository\Commands;

use Illuminate\Console\Command;

class Repository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:repository';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creation des repositories des modeles';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Sending email to:{$this->description}");
    }
}
