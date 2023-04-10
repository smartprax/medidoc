<?php

namespace Smartprax\Medidoc;

use Smartprax\Medidoc\Requests\GetInsuranceList;
use Smartprax\Medidoc\Requests\GetPersonOrOrganizationList;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MedidocServiceProvider extends PackageServiceProvider
{

    public function boot()
    {
        parent::boot();

        $this->app->singleton(Medidoc::class, fn() => new Medidoc());
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('medidoc')
            ->hasConfigFile('medidoc')
            ->hasCommands([
                GetInsuranceList::class,
                GetPersonOrOrganizationList::class,
            ]);
    }
}
