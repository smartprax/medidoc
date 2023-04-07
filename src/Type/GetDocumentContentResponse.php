<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentContentResponse implements ResultInterface
{
    private ContentResponse $GetDocumentContentResult;

    public function getGetDocumentContentResult(): ContentResponse
    {
        return $this->GetDocumentContentResult;
    }

    public function withGetDocumentContentResult(ContentResponse $GetDocumentContentResult
    ): GetDocumentContentResponse|static {
        $new = clone $this;
        $new->GetDocumentContentResult = $GetDocumentContentResult;

        return $new;
    }
}
