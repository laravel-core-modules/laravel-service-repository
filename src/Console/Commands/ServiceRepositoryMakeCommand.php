<?php

namespace LaravelCoreModule\ServiceRepository\Console\Commands;

use Illuminate\Console\Command;

/**
 * Class ServiceRepositoryMakeCommand
 */
class ServiceRepositoryMakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:service-repository-make-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Sending email to!");
    }
}
