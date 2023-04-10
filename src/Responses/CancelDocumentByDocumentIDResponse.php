<?php

namespace Smartprax\Medidoc\Responses;

class CancelDocumentByDocumentIDResponse extends GenericResponse
{
    public function __construct(public GenericResponse $CancelDocumentByDocumentIDResult)
    {}
}
