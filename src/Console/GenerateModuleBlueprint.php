<?php

namespace Kaafochino\ModuleBlueprint\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateModuleBlueprint extends Command
{
    protected $signature = 'make:module {name}';

    protected $description = 'create a new module blueprint';

    public function handle()
    {
        $module_name = $this->argument('name');

        $module_directory_tree = array(
            $module_name => [
                "Config" => [],
                "Console" => [
                    "Commands" => []
                ],
                "Controllers" => [
                    "Core" => [],
                    "Services" => [],
                ],
                "Database" => [
                    "Migrations" => [],
                    "Factories" => [],
                    "Seeders" => [],
                ],
                "Events" => [],
                "Exceptions" => [],
                "Facades" => [],
                "Listeners" => [],
                "Models" => [
                    "Entities" => [],
                    "Domains" => [],
                    "Observers" => [],
                    "Repositories" => [],
                ],
                "Providers" => [],
                "Policies" => [],
                "Resources" => [],
                "Requests" => [],
                "Routes" => [],
                "Validators" => [],
                "Views" => [],
            ]

        );

        $path = app_path();
        $this->makeDiretoriesTree($path, 'Modules', $module_directory_tree);
    }

    public function makeDiretoriesTree(string $path, string $directory_name, array $sub_directories)
    {
        $path = $path . DIRECTORY_SEPARATOR . $directory_name;

        foreach ($sub_directories as $directory_name => $sub_directory) {
            $this->makeDiretoriesTree($path, $directory_name, $sub_directory);
        }
        if (count($sub_directories) == 0) {
            File::makeDirectory($path, $mode = 0755, true, true);
        }
    }
}
