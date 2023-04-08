<?php

namespace Smartprax\Medidoc\Type;

class ConvertXmlToPdf extends MedidocRequest
{
    public function __construct(
        public string $xmlContent,
        public string $contentFormat,
        public bool $isPatientCopy
    )
    {}

}
