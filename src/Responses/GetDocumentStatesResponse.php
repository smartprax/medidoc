<?php

namespace Smartprax\Medidoc\Responses;

class GetDocumentStatesResponse extends GenericResponse
{
    public function __construct(public DocumentStatesResponse $GetDocumentStatesResult)
    {
    }
}
