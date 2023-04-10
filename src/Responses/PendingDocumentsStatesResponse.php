<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfDocumentStatesResponse;

class PendingDocumentsStatesResponse extends GenericResponse
{
    public function __construct(public ArrayOfDocumentStatesResponse $DocumentStatesResponseList)
    {}
}
