<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentStatesHistoryByDocumentIDResponse implements ResultInterface
{
    private DocumentStatesResponse $GetDocumentStatesHistoryByDocumentIDResult;

    public function getGetDocumentStatesHistoryByDocumentIDResult(): DocumentStatesResponse
    {
        return $this->GetDocumentStatesHistoryByDocumentIDResult;
    }

    public function withGetDocumentStatesHistoryByDocumentIDResult(
        DocumentStatesResponse $GetDocumentStatesHistoryByDocumentIDResult
    ): GetDocumentStatesHistoryByDocumentIDResponse|static {
        $new = clone $this;
        $new->GetDocumentStatesHistoryByDocumentIDResult = $GetDocumentStatesHistoryByDocumentIDResult;

        return $new;
    }
}
