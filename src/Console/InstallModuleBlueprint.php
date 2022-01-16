<?php

namespace Kaafochino\ModuleBlueprint\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class InstallModuleBlueprint extends Command
{
    protected $signature = 'module:init';

    protected $description = 'Initial the Module directory';

    public function handle()
    {
        $this->info('Initialize ModuleBlueprint...');

        Artisan::call('make:module User');

        $base_directories = array(
            'Core' => [],
            'Helpers' => [],
            'Libraries' => [],
        );

        $path = app_path();
        foreach ($base_directories as $directory => $sub_directories) {
            $this->makeDir($path, $directory, $sub_directories);
        }

        $this->info('ModuleBlueprint Initialized');
    }
    public function makeDir(string $path, string $directory_name, array $sub_directories)
    {
        $path = $path . DIRECTORY_SEPARATOR . $directory_name;

        foreach ($sub_directories as $directory_name => $sub_directory) {
            $this->makeDir($path, $directory_name, $sub_directory);
        }
        if (count($sub_directories) == 0) {
            File::makeDirectory($path, $mode = 0755, true, true);
        }
    }
}
