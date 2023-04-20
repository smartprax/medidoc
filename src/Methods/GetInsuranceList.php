<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsCommand;
use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Entities\InsuranceData;
use Smartprax\Medidoc\Entities\InsuranceListResponse;
use Smartprax\Medidoc\Entities\NameValue;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * See http://api.medidoc.ch/methods/getinsurancelist/ for filter specs.
 *
 * @method InsuranceData[] run(ArrayOfNameValue $filterParameters)
 */
class GetInsuranceList extends MedidocMethod
{
    use AsCommand;

    public function handle(ArrayOfNameValue $filterParameters): InsuranceListResponse
    {
        $insurances = Medidoc::call($this, \compact('filterParameters'))
            ->GetInsuranceListResult
            ->AddressList
            ->InsuranceData;

        return new InsuranceListResponse(
            AddressList: \collect($insurances)
                ->map(
                    fn ($insurance) => new InsuranceData(
                        PartnerID: $insurance->PartnerID,
                        Gln: $insurance->Gln,
                        Organisation: $insurance->Organisation,
                        Department: $insurance->Department,
                        Street: $insurance->Street,
                        Pobox: $insurance->Pobox,
                        Zip: $insurance->Zip,
                        City: $insurance->City,
                        Canton: $insurance->Canton,
                        Country: $insurance->Country,
                        Phone: $insurance->Phone,
                        Fax: $insurance->Fax,
                        Url: $insurance->Url,
                        Email: $insurance->Email,
                        Bsv: $insurance->Bsv,
                        GlnDestination: $insurance->GlnDestination,
                        InsuranceType: $insurance->InsuranceType
                    )
                )
        );
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

        $insuranceListResponse = $this->handle($filters);

        ray($insuranceListResponse);

        $command->table(
            array_keys(get_object_vars($insuranceListResponse->AddressList[0])),
            $insuranceListResponse->AddressList->map(fn (InsuranceData $insuranceData) => (array) $insuranceData)->toArray(),
        );

    }
}
