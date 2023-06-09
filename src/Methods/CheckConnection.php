<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Methods;

use Illuminate\Console\Command;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method static int run()
 */
class CheckConnection extends MedidocMethod
{
    public function handle(): bool
    {
        return Medidoc::call($this, [])->CheckConnectionResult === 1;
    }

    public function asCommand(Command $command): void
    {
        if ($this->handle()) {
            $command->info('Success!');
        } else {
            $command->error('Failed! Check medidoc config values.');
        }

    }
}
