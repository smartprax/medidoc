<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class SendDocumentListResponse implements ResultInterface
{
    private ArrayOfSendDocumentResponse $SendDocumentListResult;

    public function getSendDocumentListResult(): ArrayOfSendDocumentResponse
    {
        return $this->SendDocumentListResult;
    }

    public function withSendDocumentListResult(ArrayOfSendDocumentResponse $SendDocumentListResult
    ): SendDocumentListResponse|static {
        $new = clone $this;
        $new->SendDocumentListResult = $SendDocumentListResult;

        return $new;
    }
}
