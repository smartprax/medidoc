<?php

namespace Smartprax\Medidoc\Entities;

class SendPartialPayment extends MedidocRequest
{
    public function __construct(
        public string $medidocDocumentGID,
        public float $amount,
        public \DateTimeInterface $paymentDate
    )
    {}
}
