<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class CompleteDocumentByDocumentIDResponse implements ResultInterface
{
    private GenericResponse $CompleteDocumentByDocumentIDResult;

    public function getCompleteDocumentByDocumentIDResult(): GenericResponse
    {
        return $this->CompleteDocumentByDocumentIDResult;
    }

    public function withCompleteDocumentByDocumentIDResult(GenericResponse $CompleteDocumentByDocumentIDResult
    ): CompleteDocumentByDocumentIDResponse|static {
        $new = clone $this;
        $new->CompleteDocumentByDocumentIDResult = $CompleteDocumentByDocumentIDResult;

        return $new;
    }
}
