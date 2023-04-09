<?php

namespace Smartprax\Medidoc\Commands;

use Illuminate\Console\Command;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Entities\GetInsuranceList;
use Smartprax\Medidoc\Entities\NameValue;

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
