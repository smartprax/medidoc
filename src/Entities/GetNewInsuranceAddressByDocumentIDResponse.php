<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class GetNewInsuranceAddressByDocumentIDResponse implements ResultInterface
{
    private AddressResponse $GetNewInsuranceAddressByDocumentIDResult;

    public function getGetNewInsuranceAddressByDocumentIDResult(): AddressResponse
    {
        return $this->GetNewInsuranceAddressByDocumentIDResult;
    }

    public function withGetNewInsuranceAddressByDocumentIDResult(
        AddressResponse $GetNewInsuranceAddressByDocumentIDResult
    ): GetNewInsuranceAddressByDocumentIDResponse|static {
        $new = clone $this;
        $new->GetNewInsuranceAddressByDocumentIDResult = $GetNewInsuranceAddressByDocumentIDResult;

        return $new;
    }
}
