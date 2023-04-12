<?php

namespace Smartprax\Medidoc\Requests;

use Illuminate\Console\Command;
use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Entities\InsuranceData;
use Smartprax\Medidoc\Entities\NameValue;
use Smartprax\Medidoc\Entities\PersonOrOrganization;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Responses\PersonOrOrganizationListResponse;

/**
 * @see http://api.medidoc.ch/methods/getpersonororganizationlist/
 */
class GetPersonOrOrganizationList extends MedidocRequest
{
    public function handle(ArrayOfNameValue $filterParameters) : PersonOrOrganizationListResponse
    {
        return Medidoc::call($this, compact('filterParameters'));
    }

    public function asCommand(Command $command): void
    {
        //$filter_name = $command->choice(
        //    'Filter?',
        //    ['GLN', 'Name', 'Street', 'Zip', 'City', 'Canton', 'InsuranceType'],
        //    0,
        //);
        //
        //$filter_value = $command->ask('Value?');
        //
        //$filters = new ArrayOfNameValue([
        //    new NameValue($filter_name, $filter_value)
        //]);

        // TODO: make dynamic.

        $filters = new ArrayOfNameValue([
            new NameValue('Canton', 'AG')
        ]);

        $response = $this->handle($filters);

        $command->table(
            array_keys(get_object_vars($response->AddressList->PersonOrOrganization[0])),
            \array_map(fn(PersonOrOrganization $personOrOrganization) => (array) $personOrOrganization, $response->AddressList->PersonOrOrganization),
        );

    }

}
