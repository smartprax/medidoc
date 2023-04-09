<?php

namespace Smartprax\Medidoc\Entities;


class SendPartialPaymentByDocumentID extends MedidocRequest
{
    public function __construct(
        public string $documentID,
        public float $amount,
        public \DateTimeInterface $paymentDate
    )
    {}
}
