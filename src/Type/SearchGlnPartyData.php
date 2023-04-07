<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchGlnPartyData implements RequestInterface
{
    public function __construct(
        private string $gln,
        private string $password,
        private int $orgRole,
        private string $ean,
        private string $organisation,
        private string $firstName,
        private string $lastName,
        private string $street,
        private int $zipCode,
        private string $city,
        private string $canton,
        private int $insuranceType
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getOrgRole(): int
    {
        return $this->orgRole;
    }

    public function withOrgRole(int $orgRole): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->orgRole = $orgRole;

        return $new;
    }

    public function getEan(): string
    {
        return $this->ean;
    }

    public function withEan(string $ean): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->ean = $ean;

        return $new;
    }

    public function getOrganisation(): string
    {
        return $this->organisation;
    }

    public function withOrganisation(string $organisation): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->organisation = $organisation;

        return $new;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function withFirstName(string $firstName): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->firstName = $firstName;

        return $new;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function withLastName(string $lastName): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->lastName = $lastName;

        return $new;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function withStreet(string $street): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->street = $street;

        return $new;
    }

    public function getZipCode(): int
    {
        return $this->zipCode;
    }

    public function withZipCode(int $zipCode): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->zipCode = $zipCode;

        return $new;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function withCity(string $city): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    public function getCanton(): string
    {
        return $this->canton;
    }

    public function withCanton(string $canton): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->canton = $canton;

        return $new;
    }

    public function getInsuranceType(): int
    {
        return $this->insuranceType;
    }

    public function withInsuranceType(int $insuranceType): SearchGlnPartyData|static
    {
        $new = clone $this;
        $new->insuranceType = $insuranceType;

        return $new;
    }
}
