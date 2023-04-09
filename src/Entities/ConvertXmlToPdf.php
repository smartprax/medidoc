<?php

namespace Smartprax\Medidoc\Entities;

class ConvertXmlToPdf extends MedidocRequest
{
    public function __construct(
        public string $xmlContent,
        public string $contentFormat,
        public bool $isPatientCopy
    )
    {}

}
