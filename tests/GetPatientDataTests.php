<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Tests;

use Carbon\CarbonImmutable;
use Smartprax\Medidoc\Entities\PatientFullData;
use Smartprax\Medidoc\Methods\GetPatientDataByPatientIdentityDetails;

test('Get PatientData by Firstname, Lastname & Birthday', function () {

    $response = GetPatientDataByPatientIdentityDetails::run('Hans', 'Muster', new CarbonImmutable('1999-01-01'), 'm');

    expect($response)
        ->toBeNull();
        //->toBeInstanceOf(PatientFullData::class);
});
