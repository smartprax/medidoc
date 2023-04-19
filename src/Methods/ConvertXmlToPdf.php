<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\ConvertXmlToPdfResponse;

class ConvertXmlToPdf extends MedidocMethod
{
    public function handle(string $xmlContent, string $contentFormat, bool $isPatientCopy): ConvertXmlToPdfResponse
    {
        return Medidoc::call($this, \compact('xmlContent', 'contentFormat', 'isPatientCopy'));
    }
}
