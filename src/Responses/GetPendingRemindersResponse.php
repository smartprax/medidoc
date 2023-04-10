<?php

namespace Smartprax\Medidoc\Responses;

class GetPendingRemindersResponse extends GenericResponse
{
    public function __construct(public RemindersResponse $GetPendingRemindersResult)
    {
    }
}
