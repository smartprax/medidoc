<?php

namespace Smartprax\Medidoc;

use Phpro\SoapClient\Event\RequestEvent;
use Smartprax\Medidoc\Type\MedidocRequest;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class MedidocClientFactory
{
    public static function factory(string $wsdl): MedidocClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])->withClassMap(MedidocClassmap::getCollection()),

        );

        $eventDispatcher = new EventDispatcher();
        $eventDispatcher->addListener(RequestEvent::class, function (RequestEvent $event) {

            /** @var MedidocRequest $request */
            $request = $event->getRequest();

            $request->gln = config('medidoc.gln');
            $request->password = config('medidoc.password');

        });
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        //ray($caller);

        return new MedidocClient($caller);
    }
}
