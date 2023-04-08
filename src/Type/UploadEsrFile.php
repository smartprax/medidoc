<?php

namespace Smartprax\Medidoc\Type;

class UploadEsrFile extends MedidocRequest
{
    public function __construct(public int $type, public string $fileContent)
    {}
}
