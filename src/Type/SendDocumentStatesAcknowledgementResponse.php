<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendDocumentStatesAcknowledgementResponse implements ResultInterface
{
    private GenericResponse $SendDocumentStatesAcknowledgementResult;

    public function getSendDocumentStatesAcknowledgementResult(): GenericResponse
    {
        return $this->SendDocumentStatesAcknowledgementResult;
    }

    public function withSendDocumentStatesAcknowledgementResult(GenericResponse $SendDocumentStatesAcknowledgementResult
    ): SendDocumentStatesAcknowledgementResponse|static {
        $new = clone $this;
        $new->SendDocumentStatesAcknowledgementResult = $SendDocumentStatesAcknowledgementResult;

        return $new;
    }
}
