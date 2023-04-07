<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentContentByDocumentIDResponse implements ResultInterface
{
    private ContentResponse $GetDocumentContentByDocumentIDResult;

    public function getGetDocumentContentByDocumentIDResult(): ContentResponse
    {
        return $this->GetDocumentContentByDocumentIDResult;
    }

    public function withGetDocumentContentByDocumentIDResult(ContentResponse $GetDocumentContentByDocumentIDResult
    ): GetDocumentContentByDocumentIDResponse|static {
        $new = clone $this;
        $new->GetDocumentContentByDocumentIDResult = $GetDocumentContentByDocumentIDResult;

        return $new;
    }
}
