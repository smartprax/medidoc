<?php

namespace Smartprax\Medidoc\Entities;

class Address
{


    private string $Salutation;


    private string $CompanyName;


    private string $CompanyGln;


    private string $FirstName;


    private string $LastName;


    private string $AddressLine1;


    private string $AddressLine2;


    private string $ZipCode;


    private string $City;


    private string $Country;


    public function getSalutation(): string
    {
        return $this->Salutation;
    }


    public function withSalutation(string $Salutation): Address|static
    {
        $new = clone $this;
        $new->Salutation = $Salutation;

        return $new;
    }


    public function getCompanyName(): string
    {
        return $this->CompanyName;
    }


    public function withCompanyName(string $CompanyName): Address|static
    {
        $new = clone $this;
        $new->CompanyName = $CompanyName;

        return $new;
    }


    public function getCompanyGln(): string
    {
        return $this->CompanyGln;
    }


    public function withCompanyGln(string $CompanyGln): Address|static
    {
        $new = clone $this;
        $new->CompanyGln = $CompanyGln;

        return $new;
    }


    public function getFirstName(): string
    {
        return $this->FirstName;
    }


    public function withFirstName(string $FirstName): Address|static
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }


    public function getLastName(): string
    {
        return $this->LastName;
    }


    public function withLastName(string $LastName): Address|static
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }


    public function getAddressLine1(): string
    {
        return $this->AddressLine1;
    }


    public function withAddressLine1(string $AddressLine1): Address|static
    {
        $new = clone $this;
        $new->AddressLine1 = $AddressLine1;

        return $new;
    }


    public function getAddressLine2(): string
    {
        return $this->AddressLine2;
    }


    public function withAddressLine2(string $AddressLine2): Address|static
    {
        $new = clone $this;
        $new->AddressLine2 = $AddressLine2;

        return $new;
    }


    public function getZipCode(): string
    {
        return $this->ZipCode;
    }


    public function withZipCode(string $ZipCode): Address|static
    {
        $new = clone $this;
        $new->ZipCode = $ZipCode;

        return $new;
    }


    public function getCity(): string
    {
        return $this->City;
    }


    public function withCity(string $City): Address|static
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }


    public function getCountry(): string
    {
        return $this->Country;
    }


    public function withCountry(string $Country): Address|static
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }
}
