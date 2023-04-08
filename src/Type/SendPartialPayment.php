<?php

namespace Smartprax\Medidoc\Type;

class SendPartialPayment extends MedidocRequest
{
    public function __construct(
        public string $medidocDocumentGID,
        public float $amount,
        public \DateTimeInterface $paymentDate
    )
    {}
}
