<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendPartialPaymentByDocumentIDResponse implements ResultInterface
{
    private GenericResponse $SendPartialPaymentByDocumentIDResult;

    public function getSendPartialPaymentByDocumentIDResult(): GenericResponse
    {
        return $this->SendPartialPaymentByDocumentIDResult;
    }

    public function withSendPartialPaymentByDocumentIDResult(GenericResponse $SendPartialPaymentByDocumentIDResult
    ): SendPartialPaymentByDocumentIDResponse|static {
        $new = clone $this;
        $new->SendPartialPaymentByDocumentIDResult = $SendPartialPaymentByDocumentIDResult;

        return $new;
    }
}
