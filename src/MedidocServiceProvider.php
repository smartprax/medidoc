<?php

namespace Smartprax\Medidoc;

use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Smartprax\Medidoc\Commands\MedidocTest;
use Smartprax\Medidoc\Requests\GetInsuranceList;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MedidocServiceProvider extends PackageServiceProvider
{

    public function boot()
    {
        parent::boot();

        $this->app->singleton(Medidoc::class, function () {

            return new Medidoc(
                new EngineCaller(
                    DefaultEngineFactory::create(
                        ExtSoapOptions::defaults(config('medidoc.endpoint'))
                            ->withClassMap(MedidocClassmap::getCollection())
                    )
                )
            );

        });
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('medidoc')
            ->hasConfigFile('medidoc')
            ->hasCommands([
                MedidocTest::class,
                GetInsuranceList::class,
            ]);
    }
}
