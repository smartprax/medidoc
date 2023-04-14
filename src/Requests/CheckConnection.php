<?php

namespace Smartprax\Medidoc\Requests;

use Illuminate\Console\Command;
use Smartprax\Medidoc\Facades\Medidoc;

/**
 * @method int run()
 */
class CheckConnection extends MedidocRequest
{
    public function handle() : int
    {
        return Medidoc::call($this, []);
    }

    public function processResponse($response)
    {

        return $response->{$this->responseProp()};
    }

    public function asCommand(Command $command) : void
    {
        if ($this->handle()) {
            $command->info('Success!');
        } else {
            $command->error('Failed! Check medidoc config values.');
        }

    }
}
