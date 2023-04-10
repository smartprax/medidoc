<?php

namespace Smartprax\Medidoc\Responses;

class GetPendingDocumentsStatesListResponse extends GenericResponse
{
    public function __construct(public PendingDocumentsStatesResponse $GetPendingDocumentsStatesListResult)
    {
    }
}
