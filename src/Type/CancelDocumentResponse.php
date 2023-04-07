<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CancelDocumentResponse implements ResultInterface
{
    private GenericResponse $CancelDocumentResult;

    public function getCancelDocumentResult(): GenericResponse
    {
        return $this->CancelDocumentResult;
    }

    public function withCancelDocumentResult(GenericResponse $CancelDocumentResult): CancelDocumentResponse|static
    {
        $new = clone $this;
        $new->CancelDocumentResult = $CancelDocumentResult;

        return $new;
    }
}
