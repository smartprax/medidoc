<?php

namespace Smartprax\Medidoc\Responses;

class GetNewInsuranceAddressResponse extends GenericResponse
{
    public function __construct(public AddressResponse $GetNewInsuranceAddressResult)
    {
    }
}
