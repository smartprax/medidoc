<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentStatesResponse implements ResultInterface
{
    private DocumentStatesResponse $GetDocumentStatesResult;

    public function getGetDocumentStatesResult(): DocumentStatesResponse
    {
        return $this->GetDocumentStatesResult;
    }

    public function withGetDocumentStatesResult(DocumentStatesResponse $GetDocumentStatesResult
    ): GetDocumentStatesResponse|static {
        $new = clone $this;
        $new->GetDocumentStatesResult = $GetDocumentStatesResult;

        return $new;
    }
}
