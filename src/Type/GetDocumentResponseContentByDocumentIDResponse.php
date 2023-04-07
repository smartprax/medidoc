<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentResponseContentByDocumentIDResponse implements ResultInterface
{
    private ContentResponse $GetDocumentResponseContentByDocumentIDResult;

    public function getGetDocumentResponseContentByDocumentIDResult(): ContentResponse
    {
        return $this->GetDocumentResponseContentByDocumentIDResult;
    }

    public function withGetDocumentResponseContentByDocumentIDResult(
        ContentResponse $GetDocumentResponseContentByDocumentIDResult
    ): GetDocumentResponseContentByDocumentIDResponse|static {
        $new = clone $this;
        $new->GetDocumentResponseContentByDocumentIDResult = $GetDocumentResponseContentByDocumentIDResult;

        return $new;
    }
}
