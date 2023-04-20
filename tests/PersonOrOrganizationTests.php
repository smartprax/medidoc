<?php

declare(strict_types=1);

use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Entities\NameValue;
use Smartprax\Medidoc\Entities\PersonOrOrganizationListResponse;
use Smartprax\Medidoc\Methods\GetPersonOrOrganizationList;

test('Get By Canton Filter', function () {

    $response = GetPersonOrOrganizationList::run(
        new ArrayOfNameValue([
            new NameValue('Canton', 'AG'),
        ])
    );

    expect($response)->toBeInstanceOf(PersonOrOrganizationListResponse::class);
});

test('Get By OrgRole Doctor ', function () {

    $response = GetPersonOrOrganizationList::run(
        new ArrayOfNameValue([
            new NameValue('OrgRole', '110'),
        ])
    );

    expect($response)->toBeInstanceOf(PersonOrOrganizationListResponse::class);
});
