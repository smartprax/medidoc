<?php

namespace Smartprax\Medidoc;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\RequestInterface;
use Smartprax\Medidoc\Requests\MedidocRequest;

class Medidoc
{

    public function __construct(private readonly Caller $caller)
    {}

    public function call(MedidocRequest $request, array $properties)
    {

        // Anonymous class with all the props we need for the request.
        $requestInterfaceInstance = new class() implements RequestInterface
        {};

        // Set auth properties.
        $requestInterfaceInstance->gln = \config('medidoc.gln');
        $requestInterfaceInstance->password = \config('medidoc.password');

        // Set passed properties.
        foreach ($properties as $name => $value) {
            $requestInterfaceInstance->{$name} = $value;
        }

        return ($this->caller)($request->method(), $requestInterfaceInstance);
    }
}
