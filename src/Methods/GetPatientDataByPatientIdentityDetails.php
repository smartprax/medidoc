<?php

namespace Smartprax\Medidoc\Methods;

use Carbon\CarbonImmutable;
use Smartprax\Medidoc\Entities\PatientFullData;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @see http://api.medidoc.ch/methods/getpatientdatabypatientidentitydetails
 *
 * @method ?PatientFullData run(string $patientFirstname, string $patientLastname, CarbonImmutable $patientBirthday, string $patientGender, CarbonImmutable $treatmentDate, string $zipCode)
 */
class GetPatientDataByPatientIdentityDetails extends MedidocMethod
{
    public function handle(
        string $patientFirstname,
        string $patientLastname,
        CarbonImmutable $patientBirthday,
        string $patientGender,
        ?CarbonImmutable $treatmentDate = null,
        ?int $zipCode = null
    ): ?PatientFullData {
        $patientBirthday = $patientBirthday->toDateTimeLocalString();
        $treatmentDate = ($treatmentDate ?? now()->startOfDay())->toDateTimeLocalString();

        $patientData = Medidoc::call(
            $this,
            \compact('patientFirstname', 'patientLastname', 'patientBirthday', 'patientGender', 'treatmentDate', 'zipCode')
        )->GetPatientDataByPatientIdentityDetailsResult;

        ray($patientData);

        if ($patientData->ReturnValue !== 0) {
            return null;
        }

        return new PatientFullData(
            ReturnValue: $patientData->ReturnValue,
            ValidFromdate: new CarbonImmutable($patientData->ValidFromdate),
            ValidTodate: new CarbonImmutable($patientData->ValidTodate),
            InsuranceGLN: $patientData->InsuranceGLN,
            InsuranceBAGID: $patientData->InsuranceBAGID,
            InsuranceName: $patientData->InsuranceName,
            CardID: $patientData->CardID,
            AssuredID: $patientData->AssuredID,
            AHV: $patientData->AHV,
            Language: $patientData->Language,
            Firstname: $patientData->Firstname,
            Lastname: $patientData->Lastname,
            Birthdate: $patientData->Birthdate,
            Gender: $patientData->Gender,
            Street: $patientData->Street,
            Pobox: $patientData->Pobox,
            Zip: $patientData->Zip,
            City: $patientData->City,
            Country: $patientData->Country,
            Kvg: $patientData->Kvg,
            KvgModel: $patientData->KvgModel,
            KvgRegion: $patientData->KvgRegion,
            KvgAccident: $patientData->KvgAccident,
            KvgAssuredDataLocked: $patientData->KvgAssuredDataLocked,
            KvgBenefitDelay: $patientData->KvgBenefitDelay,
            KvgProduct1: $patientData->KvgProduct1,
            KvgProduct2: $patientData->KvgProduct2,
            KvgProduct3: $patientData->KvgProduct3,
            DrugsHorsList: $patientData->DrugsHorsList,
            DrugsHorsListAccident: $patientData->DrugsHorsListAccident,
            DrugsComplementary: $patientData->DrugsComplementary,
            DrugsComplementaryAccident: $patientData->DrugsComplementaryAccident,
            DrugsBenefitDelay: $patientData->DrugsBenefitDelay,
            HospitalUnit: $patientData->HospitalUnit,
            HospitalModel: $patientData->HospitalModel,
            HospitalAccident: $patientData->HospitalAccident,
            HospitalAkutSomatik: $patientData->HospitalAkutSomatik,
            HospitalPsychiatry: $patientData->HospitalPsychiatry,
            HospitalList: $patientData->HospitalList,
            HospitalBenefitDelay: $patientData->HospitalBenefitDelay,
            VvgProduct1: $patientData->VvgProduct1,
            VvgProduct2: $patientData->VvgProduct2,
            VvgProduct3: $patientData->VvgProduct3,
            VvgProduct4: $patientData->VvgProduct4,
            VvgProduct5: $patientData->VvgProduct5,
            VvgProduct6: $patientData->VvgProduct6,
            VvgProduct7: $patientData->VvgProduct7,
            VvgProduct8: $patientData->VvgProduct8,
        );
    }
}
