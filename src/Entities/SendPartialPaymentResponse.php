<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class SendPartialPaymentResponse implements ResultInterface
{
    private GenericResponse $SendPartialPaymentResult;

    public function getSendPartialPaymentResult(): GenericResponse
    {
        return $this->SendPartialPaymentResult;
    }

    public function withSendPartialPaymentResult(GenericResponse $SendPartialPaymentResult
    ): SendPartialPaymentResponse|static {
        $new = clone $this;
        $new->SendPartialPaymentResult = $SendPartialPaymentResult;

        return $new;
    }
}
