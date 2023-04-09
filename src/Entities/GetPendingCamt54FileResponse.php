<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class GetPendingCamt54FileResponse implements ResultInterface
{
    private Camt54FileResponse $GetPendingCamt54FileResult;

    public function getGetPendingCamt54FileResult(): Camt54FileResponse
    {
        return $this->GetPendingCamt54FileResult;
    }

    public function withGetPendingCamt54FileResult(Camt54FileResponse $GetPendingCamt54FileResult
    ): GetPendingCamt54FileResponse|static {
        $new = clone $this;
        $new->GetPendingCamt54FileResult = $GetPendingCamt54FileResult;

        return $new;
    }
}
