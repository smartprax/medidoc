<?php

namespace Smartprax\Medidoc\Methods;

use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\SearchGlnPartyDataResponse;

class SearchGlnPartyData extends MedidocMethod
{
    public function handle(
        int $orgRole,
        string $ean,
        string $organisation,
        string $firstName,
        string $lastName,
        string $street,
        int $zipCode,
        string $city,
        string $canton,
        int $insuranceType
    ): SearchGlnPartyDataResponse {
        return Medidoc::call($this, \compact('orgRole', 'ean', 'organisation', 'firstName', 'lastName', 'street', 'zipCode', 'city', 'canton', 'insuranceType'));
    }
}
