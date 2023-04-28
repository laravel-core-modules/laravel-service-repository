<?php

namespace LaravelCoreModule\ServiceRepository\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

/**
 * Class ServiceRepositoryMakeCommand
 */
class RepositoryMakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {model : The name of the model}
                                            {-p|--path= : The path to the repository file}
                                            {-n|--namespace= : The namespace of the repository file}
                                            {-s|--service= : The repository file service}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate repository classes for a model';

    /**
     * The type of the console command.
     *
     * @var string
     */
    protected $type = 'Repository';

    protected function getStub(): string
    {
        $readonly = Str::contains(
            haystack: PHP_VERSION,
            needles: '8.1',
        );

        $file = $readonly ? 'repository-81.php.stub' : 'repository.php.stub';

        return __DIR__."./../../../stubs/Repository/{$file}";
    }

    protected function getDefaultNamespace(string $rootNamespace): string
    {
        return "{$rootNamespace}\\Repository";
    }

    /**
     * Execute the console command.
     * @return void
     */
    public function handle(): void
    {
        $this->info(" command ".json_encode($this->arguments()).json_encode($this->options()));
    }
}
