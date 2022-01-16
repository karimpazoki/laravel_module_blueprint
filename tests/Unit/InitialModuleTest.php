<?php

namespace Kaafochino\ModuleBlueprint\Tests;

use Kaafochino\ModuleBlueprint\Console\{
    InstallModuleBlueprint
};

use Illuminate\Support\Facades\Artisan;
use Kaafochino\ModuleBlueprint\Tests\TestCase;

class InitialModuleTest extends TestCase
{
    /** @test */
    function the_install_command_copies_the_configuration()
    {
        Artisan::call('module:init');

        // $this->assertTrue(File::exists('.gitkeep')); TODO: create .gitkeep in the Modules directory, Then check if it exists
    }
}
