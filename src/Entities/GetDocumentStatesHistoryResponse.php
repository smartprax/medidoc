<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentStatesHistoryResponse implements ResultInterface
{
    private DocumentStatesResponse $GetDocumentStatesHistoryResult;

    public function getGetDocumentStatesHistoryResult(): DocumentStatesResponse
    {
        return $this->GetDocumentStatesHistoryResult;
    }

    public function withGetDocumentStatesHistoryResult(DocumentStatesResponse $GetDocumentStatesHistoryResult
    ): GetDocumentStatesHistoryResponse|static {
        $new = clone $this;
        $new->GetDocumentStatesHistoryResult = $GetDocumentStatesHistoryResult;

        return $new;
    }
}
