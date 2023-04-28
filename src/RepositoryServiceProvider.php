<?php

namespace LaravelCoreModule\ServiceRepository;

use Illuminate\Support\ServiceProvider;
use LaravelCoreModule\ServiceRepository\Console\Commands\ServiceRepositoryMakeCommand;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'./../config/app.php', 'service-repository');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Get namespace
        $nameSpace = $this->app->getNamespace();

        //Log::info( $nameSpace );

        // Core
        $this->publishes([
            __DIR__.'./../config/core/' => base_path('core'),
            __DIR__.'./../config/core/epository' => base_path('core/Repository'),
            __DIR__.'./../config/core/Service' => base_path('core/Service'),
        ], 'core');

        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'./../config/app.php' => config_path('service-repository.php'),
            ], 'config');

        }

        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    ServiceRepositoryMakeCommand::class,
                ],
            );
        }
    }
}
