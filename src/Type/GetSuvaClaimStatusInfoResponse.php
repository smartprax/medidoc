<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSuvaClaimStatusInfoResponse implements ResultInterface
{
    private SuvaClaimStatusInfoResponse $GetSuvaClaimStatusInfoResult;

    public function getGetSuvaClaimStatusInfoResult(): SuvaClaimStatusInfoResponse
    {
        return $this->GetSuvaClaimStatusInfoResult;
    }

    public function withGetSuvaClaimStatusInfoResult(SuvaClaimStatusInfoResponse $GetSuvaClaimStatusInfoResult
    ): GetSuvaClaimStatusInfoResponse|static {
        $new = clone $this;
        $new->GetSuvaClaimStatusInfoResult = $GetSuvaClaimStatusInfoResult;

        return $new;
    }
}
