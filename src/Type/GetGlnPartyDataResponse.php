<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetGlnPartyDataResponse implements ResultInterface
{
    private GlnPartyDataResponse $GetGlnPartyDataResult;

    public function getGetGlnPartyDataResult(): GlnPartyDataResponse
    {
        return $this->GetGlnPartyDataResult;
    }

    public function withGetGlnPartyDataResult(GlnPartyDataResponse $GetGlnPartyDataResult
    ): GetGlnPartyDataResponse|static {
        $new = clone $this;
        $new->GetGlnPartyDataResult = $GetGlnPartyDataResult;

        return $new;
    }
}
