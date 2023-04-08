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
 */
class GetInsuranceList extends MedidocRequest
{
    use AsCommand;

    public ArrayOfNameValue $filterParameters;

    public function handle(ArrayOfNameValue $filterParameters): InsuranceListResponse
    {
        $this->filterParameters = $filterParameters;
        return $this->call();
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
        //$this->filterParameters = new ArrayOfNameValue([
        //    new NameValue($filter_name, $filter_value)
        //]);

        $filters = new ArrayOfNameValue([
            new NameValue('Canton', 'ZH')
        ]);

        $res = $this->handle($filters);

        $command->table(
            array_keys(get_object_vars($res->AddressList->InsuranceData[0])),
            \array_map(fn(InsuranceData $insuranceData) => (array) $insuranceData, $res->AddressList->InsuranceData),
        );

    }
}
