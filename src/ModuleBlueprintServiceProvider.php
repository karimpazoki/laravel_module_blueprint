<?php

namespace Kaafochino\ModuleBlueprint;

use Illuminate\Support\ServiceProvider;
use Kaafochino\ModuleBlueprint\Console\{
    InstallModuleBlueprint,
    GenerateModuleBlueprint
};

class ModuleBlueprintServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallModuleBlueprint::class,
                GenerateModuleBlueprint::class,
            ]);
        }
    }
}
