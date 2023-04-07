<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CancelDocumentByDocumentIDResponse implements ResultInterface
{
    private GenericResponse $CancelDocumentByDocumentIDResult;

    public function getCancelDocumentByDocumentIDResult(): GenericResponse
    {
        return $this->CancelDocumentByDocumentIDResult;
    }

    public function withCancelDocumentByDocumentIDResult(GenericResponse $CancelDocumentByDocumentIDResult
    ): CancelDocumentByDocumentIDResponse|static {
        $new = clone $this;
        $new->CancelDocumentByDocumentIDResult = $CancelDocumentByDocumentIDResult;

        return $new;
    }
}
