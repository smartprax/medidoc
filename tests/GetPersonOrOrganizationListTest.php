<?php

use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Entities\NameValue;
use Smartprax\Medidoc\Requests\GetPersonOrOrganizationList;
use Smartprax\Medidoc\Responses\PersonOrOrganizationListResponse;

test('Get Person Or Organization List', function () {

    expect(
        GetPersonOrOrganizationList::run(new ArrayOfNameValue([
            new NameValue('Canton', 'AG')
        ]))
    )->toBeInstanceOf(PersonOrOrganizationListResponse::class);
});
