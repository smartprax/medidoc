<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Entities\CodeValue;
use Smartprax\Medidoc\Entities\NameValue;
use Smartprax\Medidoc\Entities\PersonOrOrganization;
use Smartprax\Medidoc\Entities\PersonOrOrganizationListResponse;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @see http://api.medidoc.ch/methods/getpersonororganizationlist/
 *
 * @method static PersonOrOrganizationListResponse run(ArrayOfNameValue $filterParameters)
 */
class GetPersonOrOrganizationList extends MedidocMethod
{
    public function handle(ArrayOfNameValue $filterParameters): PersonOrOrganizationListResponse
    {
        $addressList = Medidoc::call($this, compact('filterParameters'))
            ->GetPersonOrOrganizationListResult
            ->AddressList;

        $personsOrOrganizations = [];

        if (isset($addressList->PersonOrOrganization)) {

            $personsOrOrganizations = $addressList->PersonOrOrganization;

            if (! \is_array($personsOrOrganizations)) {
                $personsOrOrganizations = [$personsOrOrganizations];
            }
        }

        ray($personsOrOrganizations);

        return new PersonOrOrganizationListResponse(AddressList: \collect($personsOrOrganizations)
            ->map(
                fn ($personOrOrganization) => new PersonOrOrganization(
                    PartnerID: $personOrOrganization->PartnerID,
                    Gln: $personOrOrganization->Gln,
                    Organisation: $personOrOrganization->Organisation,
                    Department: $personOrOrganization->Department,
                    Title: $personOrOrganization->Title,
                    Salutation: $personOrOrganization->Salutation,
                    FirstName: $personOrOrganization->FirstName,
                    LastName: $personOrOrganization->LastName,
                    Street: $personOrOrganization->Street,
                    Pobox: $personOrOrganization->Pobox,
                    Zip: $personOrOrganization->Zip,
                    City: $personOrOrganization->City,
                    Canton: $personOrOrganization->Canton,
                    Country: $personOrOrganization->Country,
                    Phone: $personOrOrganization->Phone,
                    Fax: $personOrOrganization->Fax,
                    Url: $personOrOrganization->Url,
                    Email: $personOrOrganization->Email,
                    Zsr: $personOrOrganization->Zsr,
                    KNumber: $personOrOrganization->KNumber,
                    OrgRole: $personOrOrganization->OrgRole,
                    IsActive: $personOrOrganization->IsActive,
                    ImprovementList: $this->getCodeValues($personOrOrganization, 'ImprovementList'),
                    SkillList: $this->getCodeValues($personOrOrganization, 'SkillList'),
                    EmphaseList: $this->getCodeValues($personOrOrganization, 'EmphaseList'),
                )
            )
        );
    }

    private function getCodeValues(\stdClass $listObj, string $property): ?Collection
    {

        if (! isset($listObj->$property)) {
            return null;
        }

        $data = [];

        if (\is_array($listObj->$property->CodeValue)) {

            foreach ($listObj->$property->CodeValue as $codeValue) {
                $data[] = new CodeValue($codeValue->Code, $codeValue->Value);
            }

        } else {
            $data[] = new CodeValue($listObj->$property->CodeValue->Code, $listObj->$property->CodeValue->Value);
        }

        return \collect($data);
    }

    public function asCommand(Command $command): void
    {
        $filter_name = $command->choice(
            'Filter?',
            ['GLN', 'Name', 'Street', 'Zip', 'City', 'Canton', 'InsuranceType'],
            0,
        );

        $filter_value = $command->ask('Value?');

        $filters = new ArrayOfNameValue([
            new NameValue($filter_name, $filter_value),
        ]);

        $personOrOrganizationListResponse = $this->handle($filters);

        $command->table(
            array_keys(get_object_vars($personOrOrganizationListResponse->AddressList[0])),
            $personOrOrganizationListResponse->AddressList->map(fn(PersonOrOrganization $personOrOrganization) => (array) $personOrOrganization),
        );

    }
}
