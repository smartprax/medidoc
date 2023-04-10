<?php

namespace Smartprax\Medidoc\Entities;

class Address
{
    public function __construct(
    public readonly string $Salutation,
    public readonly string $CompanyName,
    public readonly string $CompanyGln,
    public readonly string $FirstName,
    public readonly string $LastName,
    public readonly string $AddressLine1,
    public readonly string $AddressLine2,
    public readonly string $ZipCode,
    public readonly string $City,
    public readonly string $Country,
    )
    {}

}
