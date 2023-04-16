<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GenericResponse;
use Smartprax\Medidoc\Responses\SendDocumentStatesAcknowledgementResponse;

/**
 * @method GenericResponse run(string $token)
 */
class SendDocumentStatesAcknowledgement extends MedidocRequest
{
    public function handle(string $token) : GenericResponse
    {
        return Medidoc::call($this, \compact('token'));
    }
}
