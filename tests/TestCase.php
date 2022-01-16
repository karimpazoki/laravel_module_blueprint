<?php

namespace Kaafochino\ModuleBlueprint\Tests;

use Kaafochino\ModuleBlueprint\ModuleBlueprintServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            ModuleBlueprintServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
