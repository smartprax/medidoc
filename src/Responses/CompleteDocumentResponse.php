<?php

namespace Smartprax\Medidoc\Responses;

class CompleteDocumentResponse extends GenericResponse
{
    public function __construct(public GenericResponse $CompleteDocumentResult)
    {}

}
