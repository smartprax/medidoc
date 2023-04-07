<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPendingDocumentsStatesListResponse implements ResultInterface
{
    private PendingDocumentsStatesResponse $GetPendingDocumentsStatesListResult;

    public function getGetPendingDocumentsStatesListResult(): PendingDocumentsStatesResponse
    {
        return $this->GetPendingDocumentsStatesListResult;
    }

    public function withGetPendingDocumentsStatesListResult(
        PendingDocumentsStatesResponse $GetPendingDocumentsStatesListResult
    ): GetPendingDocumentsStatesListResponse|static {
        $new = clone $this;
        $new->GetPendingDocumentsStatesListResult = $GetPendingDocumentsStatesListResult;

        return $new;
    }
}
