<?php

namespace Smartprax\Medidoc\Responses;

class CancelDocumentResponse extends GenericResponse
{
    public function __construct(public string $medidocDocumentGID)
    {}
}
