<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class GetSuvaInvoiceStatusInfoResponse implements ResultInterface
{
    private SuvaInvoiceStatusInfoResponse $GetSuvaInvoiceStatusInfoResult;

    public function getGetSuvaInvoiceStatusInfoResult(): SuvaInvoiceStatusInfoResponse
    {
        return $this->GetSuvaInvoiceStatusInfoResult;
    }

    public function withGetSuvaInvoiceStatusInfoResult(SuvaInvoiceStatusInfoResponse $GetSuvaInvoiceStatusInfoResult
    ): GetSuvaInvoiceStatusInfoResponse|static {
        $new = clone $this;
        $new->GetSuvaInvoiceStatusInfoResult = $GetSuvaInvoiceStatusInfoResult;

        return $new;
    }
}
