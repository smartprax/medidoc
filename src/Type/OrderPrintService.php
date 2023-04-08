<?php

namespace Smartprax\Medidoc\Type;

class OrderPrintService extends MedidocRequest
{
    public function __construct(
        public string $medidocDocumentGID,
        public Address $deliveryAddress,
        public bool $isTPCopy
    )
    {}
}
