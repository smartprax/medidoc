<?php

namespace Smartprax\Medidoc\Responses;

class GetNewInsuranceAddressByDocumentIDResponse extends GenericResponse
{
    public function __construct(public AddressResponse $GetNewInsuranceAddressByDocumentIDResult)
    {
    }
}
