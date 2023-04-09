<?php

namespace Smartprax\Medidoc\Entities;

class UploadEsrFile extends MedidocRequest
{
    public function __construct(public int $type, public string $fileContent)
    {}
}
