<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfString;

class Camt54FileResponse extends GenericResponse
{
    public function __construct(
        public ArrayOfString $Camt54FileList,
        public string $AcknowledgmentToken,
    )
    {}
}
