<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\UploadEsrFileResponse;

class UploadEsrFile extends MedidocRequest
{
    public function handle(int $type, string $fileContent) : UploadEsrFileResponse
    {
        return $this->call(\compact('type', 'fileContent'));
    }
}
