<?php

namespace LaravelCoreModule\ServiceRepository;

use Illuminate\Support\ServiceProvider;

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
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Get namespace
        $nameSpace = $this->app->getNamespace();

        //Log::info($nameSpace);
        
        // Core
        $this->publishes([
            __DIR__.'/../core' => base_path('core'),
            __DIR__.'/../core/Repository' => base_path('core/Repository'),
            __DIR__.'/../core/Service' => base_path('core/Service'),
        ]);
    }
}
