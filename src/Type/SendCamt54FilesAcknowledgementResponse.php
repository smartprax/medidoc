<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendCamt54FilesAcknowledgementResponse implements ResultInterface
{
    private GenericResponse $SendCamt54FilesAcknowledgementResult;

    public function getSendCamt54FilesAcknowledgementResult(): GenericResponse
    {
        return $this->SendCamt54FilesAcknowledgementResult;
    }

    public function withSendCamt54FilesAcknowledgementResult(GenericResponse $SendCamt54FilesAcknowledgementResult
    ): SendCamt54FilesAcknowledgementResponse|static {
        $new = clone $this;
        $new->SendCamt54FilesAcknowledgementResult = $SendCamt54FilesAcknowledgementResult;

        return $new;
    }
}
