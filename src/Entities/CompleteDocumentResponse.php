<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class CompleteDocumentResponse implements ResultInterface
{
    private GenericResponse $CompleteDocumentResult;

    public function getCompleteDocumentResult(): GenericResponse
    {
        return $this->CompleteDocumentResult;
    }

    public function withCompleteDocumentResult(GenericResponse $CompleteDocumentResult): CompleteDocumentResponse|static
    {
        $new = clone $this;
        $new->CompleteDocumentResult = $CompleteDocumentResult;

        return $new;
    }
}
