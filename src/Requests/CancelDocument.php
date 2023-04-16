<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\GenericResponse;

class CancelDocument extends MedidocRequest
{
    public function handle(string $medidocDocumentGID): GenericResponse
    {
        return Medidoc::call($this, \compact('medidocDocumentGID'));
    }
}
