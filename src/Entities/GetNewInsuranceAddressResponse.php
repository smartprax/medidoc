<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class GetNewInsuranceAddressResponse implements ResultInterface
{
    private AddressResponse $GetNewInsuranceAddressResult;

    public function getGetNewInsuranceAddressResult(): AddressResponse
    {
        return $this->GetNewInsuranceAddressResult;
    }

    public function withGetNewInsuranceAddressResult(AddressResponse $GetNewInsuranceAddressResult
    ): GetNewInsuranceAddressResponse|static {
        $new = clone $this;
        $new->GetNewInsuranceAddressResult = $GetNewInsuranceAddressResult;

        return $new;
    }
}
