<?php

namespace Smartprax\Medidoc\Entities;

class OrderPrintService extends MedidocRequest
{
    public function __construct(
        public string $medidocDocumentGID,
        public Address $deliveryAddress,
        public bool $isTPCopy
    )
    {}
}
