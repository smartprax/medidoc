<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class SearchGlnPartyDataResponse implements ResultInterface
{
    private GlnPartyDataResponse $SearchGlnPartyDataResult;

    public function getSearchGlnPartyDataResult(): GlnPartyDataResponse
    {
        return $this->SearchGlnPartyDataResult;
    }

    public function withSearchGlnPartyDataResult(GlnPartyDataResponse $SearchGlnPartyDataResult
    ): SearchGlnPartyDataResponse|static {
        $new = clone $this;
        $new->SearchGlnPartyDataResult = $SearchGlnPartyDataResult;

        return $new;
    }
}
