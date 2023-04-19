<?php

use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Entities\InsuranceListResponse;
use Smartprax\Medidoc\Entities\NameValue;
use Smartprax\Medidoc\Methods\GetInsuranceList;

test('GetInsuranceList', function () {

    $response = GetInsuranceList::run(
        new ArrayOfNameValue([
            new NameValue('Canton', 'AG'),
        ]
        )
    );

    expect($response)
        ->toBeInstanceOf(InsuranceListResponse::class);
});
