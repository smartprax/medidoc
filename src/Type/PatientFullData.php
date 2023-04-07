<?php

namespace Smartprax\Medidoc\Type;

class PatientFullData
{
    private int $ReturnValue;

    private \DateTimeInterface $ValidFromdate;

    private \DateTimeInterface $ValidTodate;

    private string $InsuranceGLN;

    private string $InsuranceBAGID;

    private string $InsuranceName;

    private string $CardID;

    private string $AssuredID;

    private string $AHV;

    private string $Language;

    private string $Firstname;

    private string $Lastname;

    private \DateTimeInterface $Birthdate;

    private string $Gender;

    private string $Street;

    private string $Pobox;

    private string $Zip;

    private string $City;

    private string $Country;

    private string $Kvg;

    private string $KvgModel;

    private string $KvgRegion;

    private string $KvgAccident;

    private bool $KvgAssuredDataLocked;

    private bool $KvgBenefitDelay;

    private string $KvgProduct1;

    private string $KvgProduct2;

    private string $KvgProduct3;

    private string $DrugsHorsList;

    private string $DrugsHorsListAccident;

    private string $DrugsComplementary;

    private string $DrugsComplementaryAccident;

    private bool $DrugsBenefitDelay;

    private string $HospitalUnit;

    private string $HospitalModel;

    private string $HospitalAccident;

    private string $HospitalAkutSomatik;

    private string $HospitalPsychiatry;

    private string $HospitalList;

    private bool $HospitalBenefitDelay;

    private string $VvgProduct1;

    private string $VvgProduct2;

    private string $VvgProduct3;

    private string $VvgProduct4;

    private string $VvgProduct5;

    private string $VvgProduct6;

    private string $VvgProduct7;

    private string $VvgProduct8;

    public function getReturnValue(): int
    {
        return $this->ReturnValue;
    }

    public function withReturnValue(int $ReturnValue): PatientFullData|static
    {
        $new = clone $this;
        $new->ReturnValue = $ReturnValue;

        return $new;
    }

    public function getValidFromdate(): \DateTimeInterface
    {
        return $this->ValidFromdate;
    }

    public function withValidFromdate(\DateTimeInterface $ValidFromdate): PatientFullData|static
    {
        $new = clone $this;
        $new->ValidFromdate = $ValidFromdate;

        return $new;
    }

    public function getValidTodate(): \DateTimeInterface
    {
        return $this->ValidTodate;
    }

    public function withValidTodate(\DateTimeInterface $ValidTodate): PatientFullData|static
    {
        $new = clone $this;
        $new->ValidTodate = $ValidTodate;

        return $new;
    }

    public function getInsuranceGLN(): string
    {
        return $this->InsuranceGLN;
    }

    public function withInsuranceGLN(string $InsuranceGLN): PatientFullData|static
    {
        $new = clone $this;
        $new->InsuranceGLN = $InsuranceGLN;

        return $new;
    }

    public function getInsuranceBAGID(): string
    {
        return $this->InsuranceBAGID;
    }

    public function withInsuranceBAGID(string $InsuranceBAGID): PatientFullData|static
    {
        $new = clone $this;
        $new->InsuranceBAGID = $InsuranceBAGID;

        return $new;
    }

    public function getInsuranceName(): string
    {
        return $this->InsuranceName;
    }

    public function withInsuranceName(string $InsuranceName): PatientFullData|static
    {
        $new = clone $this;
        $new->InsuranceName = $InsuranceName;

        return $new;
    }

    public function getCardID(): string
    {
        return $this->CardID;
    }

    public function withCardID(string $CardID): PatientFullData|static
    {
        $new = clone $this;
        $new->CardID = $CardID;

        return $new;
    }

    public function getAssuredID(): string
    {
        return $this->AssuredID;
    }

    public function withAssuredID(string $AssuredID): PatientFullData|static
    {
        $new = clone $this;
        $new->AssuredID = $AssuredID;

        return $new;
    }

    public function getAHV(): string
    {
        return $this->AHV;
    }

    public function withAHV(string $AHV): PatientFullData|static
    {
        $new = clone $this;
        $new->AHV = $AHV;

        return $new;
    }

    public function getLanguage(): string
    {
        return $this->Language;
    }

    public function withLanguage(string $Language): PatientFullData|static
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    public function getFirstname(): string
    {
        return $this->Firstname;
    }

    public function withFirstname(string $Firstname): PatientFullData|static
    {
        $new = clone $this;
        $new->Firstname = $Firstname;

        return $new;
    }

    public function getLastname(): string
    {
        return $this->Lastname;
    }

    public function withLastname(string $Lastname): PatientFullData|static
    {
        $new = clone $this;
        $new->Lastname = $Lastname;

        return $new;
    }

    public function getBirthdate(): \DateTimeInterface
    {
        return $this->Birthdate;
    }

    public function withBirthdate(\DateTimeInterface $Birthdate): PatientFullData|static
    {
        $new = clone $this;
        $new->Birthdate = $Birthdate;

        return $new;
    }

    public function getGender(): string
    {
        return $this->Gender;
    }

    public function withGender(string $Gender): PatientFullData|static
    {
        $new = clone $this;
        $new->Gender = $Gender;

        return $new;
    }

    public function getStreet(): string
    {
        return $this->Street;
    }

    public function withStreet(string $Street): PatientFullData|static
    {
        $new = clone $this;
        $new->Street = $Street;

        return $new;
    }

    public function getPobox(): string
    {
        return $this->Pobox;
    }

    public function withPobox(string $Pobox): PatientFullData|static
    {
        $new = clone $this;
        $new->Pobox = $Pobox;

        return $new;
    }

    public function getZip(): string
    {
        return $this->Zip;
    }

    public function withZip(string $Zip): PatientFullData|static
    {
        $new = clone $this;
        $new->Zip = $Zip;

        return $new;
    }

    public function getCity(): string
    {
        return $this->City;
    }

    public function withCity(string $City): PatientFullData|static
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    public function getCountry(): string
    {
        return $this->Country;
    }

    public function withCountry(string $Country): PatientFullData|static
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }

    public function getKvg(): string
    {
        return $this->Kvg;
    }

    public function withKvg(string $Kvg): PatientFullData|static
    {
        $new = clone $this;
        $new->Kvg = $Kvg;

        return $new;
    }

    public function getKvgModel(): string
    {
        return $this->KvgModel;
    }

    public function withKvgModel(string $KvgModel): PatientFullData|static
    {
        $new = clone $this;
        $new->KvgModel = $KvgModel;

        return $new;
    }

    public function getKvgRegion(): string
    {
        return $this->KvgRegion;
    }

    public function withKvgRegion(string $KvgRegion): PatientFullData|static
    {
        $new = clone $this;
        $new->KvgRegion = $KvgRegion;

        return $new;
    }

    public function getKvgAccident(): string
    {
        return $this->KvgAccident;
    }

    public function withKvgAccident(string $KvgAccident): PatientFullData|static
    {
        $new = clone $this;
        $new->KvgAccident = $KvgAccident;

        return $new;
    }

    public function getKvgAssuredDataLocked(): bool
    {
        return $this->KvgAssuredDataLocked;
    }

    public function withKvgAssuredDataLocked(bool $KvgAssuredDataLocked): PatientFullData|static
    {
        $new = clone $this;
        $new->KvgAssuredDataLocked = $KvgAssuredDataLocked;

        return $new;
    }

    public function getKvgBenefitDelay(): bool
    {
        return $this->KvgBenefitDelay;
    }

    public function withKvgBenefitDelay(bool $KvgBenefitDelay): PatientFullData|static
    {
        $new = clone $this;
        $new->KvgBenefitDelay = $KvgBenefitDelay;

        return $new;
    }

    public function getKvgProduct1(): string
    {
        return $this->KvgProduct1;
    }

    public function withKvgProduct1(string $KvgProduct1): PatientFullData|static
    {
        $new = clone $this;
        $new->KvgProduct1 = $KvgProduct1;

        return $new;
    }

    public function getKvgProduct2(): string
    {
        return $this->KvgProduct2;
    }

    public function withKvgProduct2(string $KvgProduct2): PatientFullData|static
    {
        $new = clone $this;
        $new->KvgProduct2 = $KvgProduct2;

        return $new;
    }

    public function getKvgProduct3(): string
    {
        return $this->KvgProduct3;
    }

    public function withKvgProduct3(string $KvgProduct3): PatientFullData|static
    {
        $new = clone $this;
        $new->KvgProduct3 = $KvgProduct3;

        return $new;
    }

    public function getDrugsHorsList(): string
    {
        return $this->DrugsHorsList;
    }

    public function withDrugsHorsList(string $DrugsHorsList): PatientFullData|static
    {
        $new = clone $this;
        $new->DrugsHorsList = $DrugsHorsList;

        return $new;
    }

    public function getDrugsHorsListAccident(): string
    {
        return $this->DrugsHorsListAccident;
    }

    public function withDrugsHorsListAccident(string $DrugsHorsListAccident): PatientFullData|static
    {
        $new = clone $this;
        $new->DrugsHorsListAccident = $DrugsHorsListAccident;

        return $new;
    }

    public function getDrugsComplementary(): string
    {
        return $this->DrugsComplementary;
    }

    public function withDrugsComplementary(string $DrugsComplementary): PatientFullData|static
    {
        $new = clone $this;
        $new->DrugsComplementary = $DrugsComplementary;

        return $new;
    }

    public function getDrugsComplementaryAccident(): string
    {
        return $this->DrugsComplementaryAccident;
    }

    public function withDrugsComplementaryAccident(string $DrugsComplementaryAccident): PatientFullData|static
    {
        $new = clone $this;
        $new->DrugsComplementaryAccident = $DrugsComplementaryAccident;

        return $new;
    }

    public function getDrugsBenefitDelay(): bool
    {
        return $this->DrugsBenefitDelay;
    }

    public function withDrugsBenefitDelay(bool $DrugsBenefitDelay): PatientFullData|static
    {
        $new = clone $this;
        $new->DrugsBenefitDelay = $DrugsBenefitDelay;

        return $new;
    }

    public function getHospitalUnit(): string
    {
        return $this->HospitalUnit;
    }

    public function withHospitalUnit(string $HospitalUnit): PatientFullData|static
    {
        $new = clone $this;
        $new->HospitalUnit = $HospitalUnit;

        return $new;
    }

    public function getHospitalModel(): string
    {
        return $this->HospitalModel;
    }

    public function withHospitalModel(string $HospitalModel): PatientFullData|static
    {
        $new = clone $this;
        $new->HospitalModel = $HospitalModel;

        return $new;
    }

    public function getHospitalAccident(): string
    {
        return $this->HospitalAccident;
    }

    public function withHospitalAccident(string $HospitalAccident): PatientFullData|static
    {
        $new = clone $this;
        $new->HospitalAccident = $HospitalAccident;

        return $new;
    }

    public function getHospitalAkutSomatik(): string
    {
        return $this->HospitalAkutSomatik;
    }

    public function withHospitalAkutSomatik(string $HospitalAkutSomatik): PatientFullData|static
    {
        $new = clone $this;
        $new->HospitalAkutSomatik = $HospitalAkutSomatik;

        return $new;
    }

    public function getHospitalPsychiatry(): string
    {
        return $this->HospitalPsychiatry;
    }

    public function withHospitalPsychiatry(string $HospitalPsychiatry): PatientFullData|static
    {
        $new = clone $this;
        $new->HospitalPsychiatry = $HospitalPsychiatry;

        return $new;
    }

    public function getHospitalList(): string
    {
        return $this->HospitalList;
    }

    public function withHospitalList(string $HospitalList): PatientFullData|static
    {
        $new = clone $this;
        $new->HospitalList = $HospitalList;

        return $new;
    }

    public function getHospitalBenefitDelay(): bool
    {
        return $this->HospitalBenefitDelay;
    }

    public function withHospitalBenefitDelay(bool $HospitalBenefitDelay): PatientFullData|static
    {
        $new = clone $this;
        $new->HospitalBenefitDelay = $HospitalBenefitDelay;

        return $new;
    }

    public function getVvgProduct1(): string
    {
        return $this->VvgProduct1;
    }

    public function withVvgProduct1(string $VvgProduct1): PatientFullData|static
    {
        $new = clone $this;
        $new->VvgProduct1 = $VvgProduct1;

        return $new;
    }

    public function getVvgProduct2(): string
    {
        return $this->VvgProduct2;
    }

    public function withVvgProduct2(string $VvgProduct2): PatientFullData|static
    {
        $new = clone $this;
        $new->VvgProduct2 = $VvgProduct2;

        return $new;
    }

    public function getVvgProduct3(): string
    {
        return $this->VvgProduct3;
    }

    public function withVvgProduct3(string $VvgProduct3): PatientFullData|static
    {
        $new = clone $this;
        $new->VvgProduct3 = $VvgProduct3;

        return $new;
    }

    public function getVvgProduct4(): string
    {
        return $this->VvgProduct4;
    }

    public function withVvgProduct4(string $VvgProduct4): PatientFullData|static
    {
        $new = clone $this;
        $new->VvgProduct4 = $VvgProduct4;

        return $new;
    }

    public function getVvgProduct5(): string
    {
        return $this->VvgProduct5;
    }

    public function withVvgProduct5(string $VvgProduct5): PatientFullData|static
    {
        $new = clone $this;
        $new->VvgProduct5 = $VvgProduct5;

        return $new;
    }

    public function getVvgProduct6(): string
    {
        return $this->VvgProduct6;
    }

    public function withVvgProduct6(string $VvgProduct6): PatientFullData|static
    {
        $new = clone $this;
        $new->VvgProduct6 = $VvgProduct6;

        return $new;
    }

    public function getVvgProduct7(): string
    {
        return $this->VvgProduct7;
    }

    public function withVvgProduct7(string $VvgProduct7): PatientFullData|static
    {
        $new = clone $this;
        $new->VvgProduct7 = $VvgProduct7;

        return $new;
    }

    public function getVvgProduct8(): string
    {
        return $this->VvgProduct8;
    }

    public function withVvgProduct8(string $VvgProduct8): PatientFullData|static
    {
        $new = clone $this;
        $new->VvgProduct8 = $VvgProduct8;

        return $new;
    }
}
