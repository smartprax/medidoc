<?php

namespace Smartprax\Medidoc\Methods;

use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsCommand;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Entities\InsuranceData;
use Smartprax\Medidoc\Entities\NameValue;

/**
 * See http://api.medidoc.ch/methods/getinsurancelist/ for filter specs.
 *
 * @method InsuranceData[] run(ArrayOfNameValue $filterParameters)
 */
class GetInsuranceList extends MedidocMethod
{
    use AsCommand;

    public function handle(ArrayOfNameValue $filterParameters): array
    {
        return Medidoc::call($this, \compact('filterParameters'))
            ->GetInsuranceListResult
            ->AddressList
            ->InsuranceData;
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
            new NameValue($filter_name, $filter_value)
        ]);

        $insurances_list = $this->handle($filters);

        ray(array_keys(get_object_vars($insurances_list[0])));

        $command->table(
            array_keys(get_object_vars($insurances_list[0])),
            \array_map(fn(InsuranceData $insuranceData) => (array) $insuranceData, $insurances_list),
        );

    }
}
