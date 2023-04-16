<?php

use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Entities\NameValue;
use Smartprax\Medidoc\Methods\CheckConnection;
use Smartprax\Medidoc\Methods\GetInsuranceList;
use Smartprax\Medidoc\Responses\InsuranceListResponse;

test('Get Insurance List.', function () {

    expect(
        GetInsuranceList::run(new ArrayOfNameValue([
            new NameValue('Canton', 'AG')
        ]))
    )->toBeArray();
});
