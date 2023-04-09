<?php

namespace Smartprax\Medidoc\Entities;


class GetNewInsuranceAddress extends MedidocRequest
{
    public function __construct(public string $medidocDocumentGID)
    {}
}
