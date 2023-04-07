<?php

namespace Smartprax\Medidoc\Type;

class PersonOrOrganization
{
    private int $PartnerID;

    private string $Gln;

    private string $Organisation;

    private string $Department;

    private string $Title;

    private string $Salutation;

    private string $FirstName;

    private string $LastName;

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

    private string $Zsr;

    private string $KNumber;

    private int $OrgRole;

    private bool $IsActive;

    private ArrayOfCodeValue $ImprovementList;

    private ArrayOfCodeValue $SkillList;

    private ArrayOfCodeValue $EmphaseList;

    public function getPartnerID(): int
    {
        return $this->PartnerID;
    }

    public function withPartnerID(int $PartnerID): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->PartnerID = $PartnerID;

        return $new;
    }

    public function getGln(): string
    {
        return $this->Gln;
    }

    public function withGln(string $Gln): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Gln = $Gln;

        return $new;
    }

    public function getOrganisation(): string
    {
        return $this->Organisation;
    }

    public function withOrganisation(string $Organisation): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Organisation = $Organisation;

        return $new;
    }

    public function getDepartment(): string
    {
        return $this->Department;
    }

    public function withDepartment(string $Department): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Department = $Department;

        return $new;
    }

    public function getTitle(): string
    {
        return $this->Title;
    }

    public function withTitle(string $Title): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    public function getSalutation(): string
    {
        return $this->Salutation;
    }

    public function withSalutation(string $Salutation): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Salutation = $Salutation;

        return $new;
    }

    public function getFirstName(): string
    {
        return $this->FirstName;
    }

    public function withFirstName(string $FirstName): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    public function getLastName(): string
    {
        return $this->LastName;
    }

    public function withLastName(string $LastName): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    public function getStreet(): string
    {
        return $this->Street;
    }

    public function withStreet(string $Street): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Street = $Street;

        return $new;
    }

    public function getPobox(): string
    {
        return $this->Pobox;
    }

    public function withPobox(string $Pobox): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Pobox = $Pobox;

        return $new;
    }

    public function getZip(): int
    {
        return $this->Zip;
    }

    public function withZip(int $Zip): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Zip = $Zip;

        return $new;
    }

    public function getCity(): string
    {
        return $this->City;
    }

    public function withCity(string $City): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    public function getCanton(): string
    {
        return $this->Canton;
    }

    public function withCanton(string $Canton): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Canton = $Canton;

        return $new;
    }

    public function getCountry(): string
    {
        return $this->Country;
    }

    public function withCountry(string $Country): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }

    public function getPhone(): string
    {
        return $this->Phone;
    }

    public function withPhone(string $Phone): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Phone = $Phone;

        return $new;
    }

    public function getFax(): string
    {
        return $this->Fax;
    }

    public function withFax(string $Fax): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Fax = $Fax;

        return $new;
    }

    public function getUrl(): string
    {
        return $this->Url;
    }

    public function withUrl(string $Url): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Url = $Url;

        return $new;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    public function withEmail(string $Email): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    public function getZsr(): string
    {
        return $this->Zsr;
    }

    public function withZsr(string $Zsr): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->Zsr = $Zsr;

        return $new;
    }

    public function getKNumber(): string
    {
        return $this->KNumber;
    }

    public function withKNumber(string $KNumber): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->KNumber = $KNumber;

        return $new;
    }

    public function getOrgRole(): int
    {
        return $this->OrgRole;
    }

    public function withOrgRole(int $OrgRole): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->OrgRole = $OrgRole;

        return $new;
    }

    public function getIsActive(): bool
    {
        return $this->IsActive;
    }

    public function withIsActive(bool $IsActive): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->IsActive = $IsActive;

        return $new;
    }

    public function getImprovementList(): ArrayOfCodeValue
    {
        return $this->ImprovementList;
    }

    public function withImprovementList(ArrayOfCodeValue $ImprovementList): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->ImprovementList = $ImprovementList;

        return $new;
    }

    public function getSkillList(): ArrayOfCodeValue
    {
        return $this->SkillList;
    }

    public function withSkillList(ArrayOfCodeValue $SkillList): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->SkillList = $SkillList;

        return $new;
    }

    public function getEmphaseList(): ArrayOfCodeValue
    {
        return $this->EmphaseList;
    }

    public function withEmphaseList(ArrayOfCodeValue $EmphaseList): PersonOrOrganization|static
    {
        $new = clone $this;
        $new->EmphaseList = $EmphaseList;

        return $new;
    }
}
