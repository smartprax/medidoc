<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentResponseContentResponse implements ResultInterface
{
    private ContentResponse $GetDocumentResponseContentResult;

    public function getGetDocumentResponseContentResult(): ContentResponse
    {
        return $this->GetDocumentResponseContentResult;
    }

    public function withGetDocumentResponseContentResult(ContentResponse $GetDocumentResponseContentResult
    ): GetDocumentResponseContentResponse|static {
        $new = clone $this;
        $new->GetDocumentResponseContentResult = $GetDocumentResponseContentResult;

        return $new;
    }
}
