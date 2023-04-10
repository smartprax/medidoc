<?php

namespace Smartprax\Medidoc\Responses;

class SendDocumentStatesAcknowledgementResponse extends GenericResponse
{
    public function __construct(public GenericResponse $SendDocumentStatesAcknowledgementResult)
    {
    }
}
