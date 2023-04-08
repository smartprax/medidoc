<?php

namespace Smartprax\Medidoc\Type;

class GetSuvaInvoiceStatusInfo extends MedidocRequest
{
    public function __construct(
        public int $requestType,
        public string $glnZsr,
        public float $invoiceAmount,
        public string $invoiceNumber,
        public \DateTimeInterface $invoiceDate,
        public \DateTimeInterface $firstTreatmentDate
    )
    {}
}
