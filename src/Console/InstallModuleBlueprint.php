<?php

namespace Kaafochino\ModuleBlueprint\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallModuleBlueprint extends Command
{
    protected $signature = 'module:init';

    protected $description = 'Initial the Module directory';

    public function handle()
    {
        $this->info('Initialize ModuleBlueprint...');

        $path = app_path() . '/Modules';

        File::makeDirectory($path, $mode = 0755, true, true);

        $this->info('ModuleBlueprint Initialized');
    }
}
