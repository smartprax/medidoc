<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\ConvertXmlToPdfResponse;

class ConvertXmlToPdf extends MedidocRequest
{
    public function handle(string $xmlContent, string $contentFormat, bool $isPatientCopy) : ConvertXmlToPdfResponse
    {
        return Medidoc::call($this, \compact('xmlContent', 'contentFormat', 'isPatientCopy'));
    }

}
