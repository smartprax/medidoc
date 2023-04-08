<?php

namespace Smartprax\Medidoc\Type;


class GetNewInsuranceAddress extends MedidocRequest
{
    public function __construct(public string $medidocDocumentGID)
    {}
}
