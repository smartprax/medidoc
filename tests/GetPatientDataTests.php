<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Tests;

use Carbon\CarbonImmutable;
use Smartprax\Medidoc\Entities\PatientFullData;
use Smartprax\Medidoc\Methods\GetPatientDataByInsuranceCardNumber;
use Smartprax\Medidoc\Methods\GetPatientDataByPatientIdentityDetails;

test('Get PatientData by Firstname, Lastname & Birthday', function () {

    $response = GetPatientDataByPatientIdentityDetails::run(
        patientFirstname: 'Hans',
        patientLastname: 'Muster',
        patientBirthday: new CarbonImmutable('1977-01-01'),
        patientGender: 'm',
        zipCode: '8000');

    ray($response);

    expect($response)
        ->toBeNull();
        //->toBeInstanceOf(PatientFullData::class);
});

test('Get PatientData by Insurance Card Number', function () {

    $response = GetPatientDataByInsuranceCardNumber::run(
        insuranceCardNumber: '12345678901234567890',
    );

    ray($response);

    expect($response)
        //->toBeNull();
        ->toBeInstanceOf(PatientFullData::class);
});
