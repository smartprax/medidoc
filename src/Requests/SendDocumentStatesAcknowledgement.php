<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\SendDocumentStatesAcknowledgementResponse;

class SendDocumentStatesAcknowledgement extends MedidocRequest
{
    public function handle(string $token) : SendDocumentStatesAcknowledgementResponse
    {
        return Medidoc::call($this, \compact('token'));
    }
}
