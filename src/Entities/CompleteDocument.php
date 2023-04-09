<?php

namespace Smartprax\Medidoc\Entities;

class CompleteDocument extends MedidocRequest
{

    public function __construct(public string $medidocDocumentGID, public \DateTimeInterface $completeDate)
    {}

}
