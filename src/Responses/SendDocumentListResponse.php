<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfSendDocumentResponse;

class SendDocumentListResponse extends GenericResponse
{
    public function __construct(public ArrayOfSendDocumentResponse $SendDocumentListResult)
    {}
}
