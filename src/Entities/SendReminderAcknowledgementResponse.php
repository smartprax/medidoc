<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class SendReminderAcknowledgementResponse implements ResultInterface
{
    private GenericResponse $SendReminderAcknowledgementResult;

    public function getSendReminderAcknowledgementResult(): GenericResponse
    {
        return $this->SendReminderAcknowledgementResult;
    }

    public function withSendReminderAcknowledgementResult(GenericResponse $SendReminderAcknowledgementResult
    ): SendReminderAcknowledgementResponse|static {
        $new = clone $this;
        $new->SendReminderAcknowledgementResult = $SendReminderAcknowledgementResult;

        return $new;
    }
}
