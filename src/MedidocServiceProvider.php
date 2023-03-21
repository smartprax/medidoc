<?php

namespace Smartprax\Medidoc;

use Smartprax\Medidoc\Methods\CheckConnection;
use Smartprax\Medidoc\Methods\ListFunctions;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MedidocServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('medidoc')
            ->hasConfigFile('medidoc')
            //->hasMigration('create_medidoc_table')
            ->hasCommands([
                ListFunctions::class,
                CheckConnection::class
            ]);
    }


}
