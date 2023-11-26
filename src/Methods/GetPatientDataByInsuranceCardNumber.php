<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Carbon\CarbonImmutable;
use Illuminate\Console\Command;
use Smartprax\Medidoc\Entities\PatientFullData;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @see http://api.medidoc.ch/methods/getpatientdatabyinsurancecardnumber
 *
 * @method static PatientFullData|null run(string $insuranceCardNumber)
 */
class GetPatientDataByInsuranceCardNumber extends MedidocMethod
{
    public function handle(
        string $insuranceCardNumber,
    ): ?PatientFullData {
        $patientData = Medidoc::call(
            $this,
            \compact('insuranceCardNumber')
        )->GetPatientDataByInsuranceCardNumberResult;

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
            HospitalBenefitDelay: $patientData->HospitalBenefitDelay
        );
    }

    public function asCommand(Command $command): void
    {
        $insuranceCardNumber = $command->ask('Insurance card number');

        $patientFullData = $this->handle(
            insuranceCardNumber: $insuranceCardNumber
        );

        if ($patientFullData) {
            $command->info('Insurance GLN: ' . $patientFullData->InsuranceGLN);
        } else {
            $command->info('No results.');
        }
    }
}
