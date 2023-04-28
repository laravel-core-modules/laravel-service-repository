<?php

namespace LaravelCoreModule\ServiceRepository\Tests;

use LaravelCoreModule\ServiceRepository\RepositoryServiceProvider;
use Orchestra\Testbench\TestCase;

class ServiceRepositoryCase extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app): array
    {
        return [
            RepositoryServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
