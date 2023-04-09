<?php

namespace Smartprax\Medidoc\Entities;

class SearchGlnPartyData extends MedidocRequest
{
    public function __construct(
        public int $orgRole,
        public string $ean,
        public string $organisation,
        public string $firstName,
        public string $lastName,
        public string $street,
        public int $zipCode,
        public string $city,
        public string $canton,
        public int $insuranceType
    )
    {}
}
