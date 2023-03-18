<?php

namespace Smartprax\Medidoc\Commands;

use Illuminate\Console\Command;

class MedidocCommand extends Command
{
    public $signature = 'medidoc';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
