<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class SendVesrRecordsAcknowledgementResponse implements ResultInterface
{
    private GenericResponse $SendVesrRecordsAcknowledgementResult;

    public function getSendVesrRecordsAcknowledgementResult(): GenericResponse
    {
        return $this->SendVesrRecordsAcknowledgementResult;
    }

    public function withSendVesrRecordsAcknowledgementResult(GenericResponse $SendVesrRecordsAcknowledgementResult
    ): SendVesrRecordsAcknowledgementResponse|static {
        $new = clone $this;
        $new->SendVesrRecordsAcknowledgementResult = $SendVesrRecordsAcknowledgementResult;

        return $new;
    }
}
