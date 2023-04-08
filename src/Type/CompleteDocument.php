<?php

namespace Smartprax\Medidoc\Type;

class CompleteDocument extends MedidocRequest
{

    public function __construct(public string $medidocDocumentGID, public \DateTimeInterface $completeDate)
    {}

}
