<?php

namespace Smartprax\Medidoc\Entities;

use Carbon\CarbonImmutable;

class PatientFullData
{
    public function __construct(
        public readonly int $ReturnValue,
        public readonly CarbonImmutable $ValidFromdate,
        public readonly CarbonImmutable $ValidTodate,
        public readonly string $InsuranceGLN,
        public readonly string $InsuranceBAGID,
        public readonly string $InsuranceName,
        public readonly string $CardID,
        public readonly string $AssuredID,
        public readonly string $AHV,
        public readonly string $Language,
        public readonly string $Firstname,
        public readonly string $Lastname,
        public readonly CarbonImmutable $Birthdate,
        public readonly string $Gender,
        public readonly string $Street,
        public readonly string $Pobox,
        public readonly string $Zip,
        public readonly string $City,
        public readonly string $Country,
        public readonly string $Kvg,
        public readonly string $KvgModel,
        public readonly string $KvgRegion,
        public readonly string $KvgAccident,
        public readonly bool $KvgAssuredDataLocked,
        public readonly bool $KvgBenefitDelay,
        public readonly string $KvgProduct1,
        public readonly string $KvgProduct2,
        public readonly string $KvgProduct3,
        public readonly string $DrugsHorsList,
        public readonly string $DrugsHorsListAccident,
        public readonly string $DrugsComplementary,
        public readonly string $DrugsComplementaryAccident,
        public readonly bool $DrugsBenefitDelay,
        public readonly string $HospitalUnit,
        public readonly string $HospitalModel,
        public readonly string $HospitalAccident,
        public readonly string $HospitalAkutSomatik,
        public readonly string $HospitalPsychiatry,
        public readonly string $HospitalList,
        public readonly bool $HospitalBenefitDelay,
        public readonly string $VvgProduct1,
        public readonly string $VvgProduct2,
        public readonly string $VvgProduct3,
        public readonly string $VvgProduct4,
        public readonly string $VvgProduct5,
        public readonly string $VvgProduct6,
        public readonly string $VvgProduct7,
        public readonly string $VvgProduct8,
    ) {
    }
}
