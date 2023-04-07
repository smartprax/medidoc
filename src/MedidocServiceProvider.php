<?php

namespace Smartprax\Medidoc;

use Smartprax\Medidoc\Commands\MedidocTest;
use Smartprax\Medidoc\Methods\CheckConnection;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MedidocServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('medidoc')
            ->hasConfigFile('medidoc')
            ->hasCommands([
                MedidocTest::class
            ]);
    }


}
