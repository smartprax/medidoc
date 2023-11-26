<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Tests;

use Carbon\CarbonImmutable;
use Smartprax\Medidoc\Entities\PatientFullData;
use Smartprax\Medidoc\Methods\GetPatientDataByInsuranceCardNumber;
use Smartprax\Medidoc\Methods\GetPatientDataByPatientIdentityDetails;

test('Get PatientData by Firstname, Lastname & Birthday', function () {

    ray(\config());

    $response = GetPatientDataByPatientIdentityDetails::run(
        patientGender: 'male',
        patientFirstname: 'Rico',
        patientLastname: 'Leuthold',
        patientBirthday: new CarbonImmutable('1977-06-10'),
    );

    expect($response)
        ->toBeNull();
        //->toBeInstanceOf(PatientFullData::class);
});

test('Get PatientData by Insurance Card Number', function () {

    $response = GetPatientDataByInsuranceCardNumber::run(
        insuranceCardNumber: '12345678901234567890',
    );

    expect($response)
        ->toBeNull();
        //->toBeInstanceOf(PatientFullData::class);
});
