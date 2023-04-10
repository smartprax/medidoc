<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\ConvertXmlToPdfResponse;

class ConvertXmlToPdf extends MedidocRequest
{
    public function handle(string $xmlContent, string $contentFormat, bool $isPatientCopy) : ConvertXmlToPdfResponse
    {
        return $this->call(\compact('xmlContent', 'contentFormat', 'isPatientCopy'));
    }

}
