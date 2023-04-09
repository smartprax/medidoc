<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class SendNotificationAcknowledgementResponse implements ResultInterface
{
    private GenericResponse $SendNotificationAcknowledgementResult;

    public function getSendNotificationAcknowledgementResult(): GenericResponse
    {
        return $this->SendNotificationAcknowledgementResult;
    }

    public function withSendNotificationAcknowledgementResult(GenericResponse $SendNotificationAcknowledgementResult
    ): SendNotificationAcknowledgementResponse|static {
        $new = clone $this;
        $new->SendNotificationAcknowledgementResult = $SendNotificationAcknowledgementResult;

        return $new;
    }
}
