<?php

namespace Smartprax\Medidoc\Responses;

class CompleteDocumentByDocumentIDResponse extends GenericResponse
{
    public function __construct(public \DateTimeInterface $completeDate)
    {}
}
