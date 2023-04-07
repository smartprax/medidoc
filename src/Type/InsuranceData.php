<?php

namespace Smartprax\Medidoc\Type;

class InsuranceData
{
    private int $PartnerID;

    private string $Gln;

    private string $Organisation;

    private string $Department;

    private string $Street;

    private string $Pobox;

    private int $Zip;

    private string $City;

    private string $Canton;

    private string $Country;

    private string $Phone;

    private string $Fax;

    private string $Url;

    private string $Email;

    private string $Bsv;

    private string $GlnDestination;

    private string $InsuranceType;

    public function getPartnerID(): int
    {
        return $this->PartnerID;
    }

    public function withPartnerID(int $PartnerID): InsuranceData|static
    {
        $new = clone $this;
        $new->PartnerID = $PartnerID;

        return $new;
    }

    public function getGln(): string
    {
        return $this->Gln;
    }

    public function withGln(string $Gln): InsuranceData|static
    {
        $new = clone $this;
        $new->Gln = $Gln;

        return $new;
    }

    public function getOrganisation(): string
    {
        return $this->Organisation;
    }

    public function withOrganisation(string $Organisation): InsuranceData|static
    {
        $new = clone $this;
        $new->Organisation = $Organisation;

        return $new;
    }

    public function getDepartment(): string
    {
        return $this->Department;
    }

    public function withDepartment(string $Department): InsuranceData|static
    {
        $new = clone $this;
        $new->Department = $Department;

        return $new;
    }

    public function getStreet(): string
    {
        return $this->Street;
    }

    public function withStreet(string $Street): InsuranceData|static
    {
        $new = clone $this;
        $new->Street = $Street;

        return $new;
    }

    public function getPobox(): string
    {
        return $this->Pobox;
    }

    public function withPobox(string $Pobox): InsuranceData|static
    {
        $new = clone $this;
        $new->Pobox = $Pobox;

        return $new;
    }

    public function getZip(): int
    {
        return $this->Zip;
    }

    public function withZip(int $Zip): InsuranceData|static
    {
        $new = clone $this;
        $new->Zip = $Zip;

        return $new;
    }

    public function getCity(): string
    {
        return $this->City;
    }

    public function withCity(string $City): InsuranceData|static
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    public function getCanton(): string
    {
        return $this->Canton;
    }

    public function withCanton(string $Canton): InsuranceData|static
    {
        $new = clone $this;
        $new->Canton = $Canton;

        return $new;
    }

    public function getCountry(): string
    {
        return $this->Country;
    }

    public function withCountry(string $Country): InsuranceData|static
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }

    public function getPhone(): string
    {
        return $this->Phone;
    }

    public function withPhone(string $Phone): InsuranceData|static
    {
        $new = clone $this;
        $new->Phone = $Phone;

        return $new;
    }

    public function getFax(): string
    {
        return $this->Fax;
    }

    public function withFax(string $Fax): InsuranceData|static
    {
        $new = clone $this;
        $new->Fax = $Fax;

        return $new;
    }

    public function getUrl(): string
    {
        return $this->Url;
    }

    public function withUrl(string $Url): InsuranceData|static
    {
        $new = clone $this;
        $new->Url = $Url;

        return $new;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    public function withEmail(string $Email): InsuranceData|static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    public function getBsv(): string
    {
        return $this->Bsv;
    }

    public function withBsv(string $Bsv): InsuranceData|static
    {
        $new = clone $this;
        $new->Bsv = $Bsv;

        return $new;
    }

    public function getGlnDestination(): string
    {
        return $this->GlnDestination;
    }

    public function withGlnDestination(string $GlnDestination): InsuranceData
    {
        $new = clone $this;
        $new->GlnDestination = $GlnDestination;

        return $new;
    }

    public function getInsuranceType(): int
    {
        return $this->InsuranceType;
    }

    public function withInsuranceType(int $InsuranceType): InsuranceData
    {
        $new = clone $this;
        $new->InsuranceType = $InsuranceType;

        return $new;
    }
}
