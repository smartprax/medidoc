<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class UploadEsrFileResponse implements ResultInterface
{
    private GenericResponse $UploadEsrFileResult;

    public function getUploadEsrFileResult(): GenericResponse
    {
        return $this->UploadEsrFileResult;
    }

    public function withUploadEsrFileResult(GenericResponse $UploadEsrFileResult): UploadEsrFileResponse|static
    {
        $new = clone $this;
        $new->UploadEsrFileResult = $UploadEsrFileResult;

        return $new;
    }
}
