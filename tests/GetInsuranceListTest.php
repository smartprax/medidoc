<?php

use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Entities\NameValue;
use Smartprax\Medidoc\Requests\CheckConnection;
use Smartprax\Medidoc\Requests\GetInsuranceList;
use Smartprax\Medidoc\Responses\InsuranceListResponse;

test('Get Insurance List.', function () {

    expect(
        GetInsuranceList::run(new ArrayOfNameValue([
            new NameValue('Canton', 'AG')
        ]))
    )->toBeInstanceOf(InsuranceListResponse::class);
});
