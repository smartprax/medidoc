<?php

namespace Smartprax\Medidoc;

use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Event\RequestEvent;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Smartprax\Medidoc\Commands\MedidocTest;
use Smartprax\Medidoc\Type\MedidocRequest;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Symfony\Component\EventDispatcher\EventDispatcher;

class MedidocServiceProvider extends PackageServiceProvider
{

    public function boot()
    {
        parent::boot();

        $this->app->singleton(MedidocClient::class, function () {

            $engine = DefaultEngineFactory::create(
                ExtSoapOptions::defaults(config('medidoc.endpoint'))
                    ->withClassMap(MedidocClassmap::getCollection())
            );

            $eventDispatcher = new EventDispatcher();

            $eventDispatcher->addListener(RequestEvent::class, function (RequestEvent $event) {

                /** @var MedidocRequest $request */
                $request = $event->getRequest();

                $request->gln = config('medidoc.gln');
                $request->password = config('medidoc.password');
            });

            $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

            return new MedidocClient($caller);
        });
    }

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
