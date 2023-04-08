<?php

namespace Smartprax\Medidoc\Type;


class SendPartialPaymentByDocumentID extends MedidocRequest
{
    public function __construct(
        public string $documentID,
        public float $amount,
        public \DateTimeInterface $paymentDate
    )
    {}
}
