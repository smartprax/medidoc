<?php

namespace Smartprax\Medidoc\Commands;

use Illuminate\Console\Command;
use Smartprax\Medidoc\MedidocClientFactory;
use Smartprax\Medidoc\Type\ArrayOfNameValue;
use Smartprax\Medidoc\Type\GetInsuranceList;
use Smartprax\Medidoc\Type\NameValue;

class MedidocTest extends Command
{
    public $signature = 'medidoc:test';

    public function handle(): int
    {

        $client = MedidocClientFactory::factory(config('medidoc.endpoint'));
        $response = $client->getInsuranceList(
            new GetInsuranceList(
                config('medidoc.gln'),
                config('medidoc.password'),
                new ArrayOfNameValue([new NameValue('Canton', 'ZH')])
            )
        );

        ray($response);

        return self::SUCCESS;
    }
}
