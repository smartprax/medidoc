<?php

namespace Smartprax\Medidoc\Methods;

use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\Concerns\AsCommand;
use SoapClient;
use SoapFault;

class ListFunctions
{
    use AsCommand, AsAction;

    /**
     * @throws SoapFault
     */
    public function handle() : array
    {
        return (new SoapClient(\config('medidoc.endpoint'), [
            "soap_version" => SOAP_1_2, // SOAP_1_1
            'cache_wsdl' => WSDL_CACHE_NONE, // WSDL_CACHE_MEMORY
            'trace' => 1,
            'exception' => 1,
            'keep_alive' => false,
            'connection_timeout' => 500000
        ]))->__getFunctions();
    }

    public string $commandSignature = 'medidoc:functions';


    /**
     * @throws SoapFault
     */
    public function asCommand(Command $command): void
    {
        $functions = \collect($this->handle())->sort()->map(function(string $function) {
            list($request, $response) = array_reverse(\explode(' ', $function, 2));

            $request = strtok($request, '(');

            return [$request, $response];
        });

        $command->table(['Request', 'Response'], $functions);

    }

}
