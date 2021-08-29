<?php

namespace Gugunso\LaravelUiCli\Test\Feature\Command;

use Orchestra\Testbench\TestCase;

class Base extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [\Gugunso\LaravelUiCli\ServiceProvider::class];
    }
}