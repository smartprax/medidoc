<?php

namespace Smartprax\Medidoc;

use Phpro\SoapClient\Caller\Caller;
use Smartprax\Medidoc\Requests\MedidocRequest;

class Medidoc
{

    public function __construct(private readonly Caller $caller)
    {}

    public function call(MedidocRequest $request)
    {
        return ($this->caller)($request->method(), $request);
    }
}
