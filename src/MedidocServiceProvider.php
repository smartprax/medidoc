<?php

namespace Smartprax\Medidoc;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Smartprax\Medidoc\Commands\MedidocCommand;

class MedidocServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('medidoc')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_medidoc_table')
            ->hasCommand(MedidocCommand::class);
    }
}
