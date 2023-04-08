<?php

namespace Smartprax\Medidoc\Commands;

use Illuminate\Console\Command;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Type\ArrayOfNameValue;
use Smartprax\Medidoc\Type\GetInsuranceList;
use Smartprax\Medidoc\Type\NameValue;

class MedidocTest extends Command
{
    public $signature = 'medidoc:test';

    public function handle(): int
    {
        $response = Medidoc::getInsuranceList(
            new GetInsuranceList(
                new ArrayOfNameValue([new NameValue('Canton', 'ZH')])
            )
        );

        ray($response);

        return self::SUCCESS;
    }
}
