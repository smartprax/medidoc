<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfDocumentStatesResponse;

class ArrayOfDocumentsStatesResponse extends GenericResponse
{
    public function __construct(readonly public ArrayOfDocumentStatesResponse $DocumentStatesResponseList)
    {}
}
