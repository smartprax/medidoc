<?php

namespace Smartprax\Medidoc\Requests;

use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsCommand;
use phpDocumentor\Reflection\Exception;
use Smartprax\Medidoc\Type\ArrayOfNameValue;
use Smartprax\Medidoc\Type\InsuranceData;
use Smartprax\Medidoc\Type\InsuranceListResponse;
use Smartprax\Medidoc\Type\NameValue;

/**
 * See http://api.medidoc.ch/methods/getinsurancelist/ for filter specs.
 *
 * @method run(ArrayOfNameValue $filterParameters)
 */
class GetInsuranceList extends MedidocRequest
{
    use AsCommand;

    public function handle(ArrayOfNameValue $filterParameters): InsuranceListResponse
    {
        return $this->call(\compact('filterParameters'));
    }

    /**
     * @throws Exception
     */
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

        $filters = new ArrayOfNameValue([
            new NameValue('Canton', 'AG')
        ]);

        $response = $this->handle($filters);

        $command->table(
            array_keys(get_object_vars($response->AddressList->InsuranceData[0])),
            \array_map(fn(InsuranceData $insuranceData) => (array) $insuranceData, $response->AddressList->InsuranceData),
        );

    }
}
