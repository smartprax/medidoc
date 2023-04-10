<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\SendDocumentStatesAcknowledgementResponse;

class SendDocumentStatesAcknowledgement extends MedidocRequest
{
    public function handle(string $token) : SendDocumentStatesAcknowledgementResponse
    {
        return $this->call(\compact('token'));
    }
}
