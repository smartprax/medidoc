<?php

namespace Smartprax\Medidoc\Responses;

class GetDocumentContentResponse extends GenericResponse
{
    public function __construct(public ContentResponse $GetDocumentContentResult)
    {
    }
}
