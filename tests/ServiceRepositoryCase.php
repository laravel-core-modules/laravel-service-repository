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

  /**
   * 
   * @return array
   */
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