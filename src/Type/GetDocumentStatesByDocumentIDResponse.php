<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentStatesByDocumentIDResponse implements ResultInterface
{
    private DocumentStatesResponse $GetDocumentStatesByDocumentIDResult;

    public function getGetDocumentStatesByDocumentIDResult(): DocumentStatesResponse
    {
        return $this->GetDocumentStatesByDocumentIDResult;
    }

    public function withGetDocumentStatesByDocumentIDResult(DocumentStatesResponse $GetDocumentStatesByDocumentIDResult
    ): GetDocumentStatesByDocumentIDResponse|static {
        $new = clone $this;
        $new->GetDocumentStatesByDocumentIDResult = $GetDocumentStatesByDocumentIDResult;

        return $new;
    }
}
