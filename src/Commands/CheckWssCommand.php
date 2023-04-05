<?php

namespace Smartprax\Medidoc\Commands;

use Illuminate\Console\Command;
use Smartprax\Medidoc\Entitites\CheckConnection;
use Smartprax\Medidoc\Entitites\CheckConnectionResponse;
use SoapClient;
use WsdlToPhp\WsSecurity\WsSecurity;

class CheckWssCommand extends Command
{
    public $signature = 'medidoc:wss';
    public $description = 'medidoc wss';

    /**
     * @throws \SoapFault
     */
    public function handle(): int
    {
        $soapClient = new SoapClient(config('medidoc.endpoint') . '?WSDL', [
            'cache_wsdl' => WSDL_CACHE_NONE,
            'classmap' => [
                'CheckConnection' => CheckConnection::class,
                'CheckConnectionResponse' => CheckConnectionResponse::class
            ],
            'exceptions' => true,
            'soap_version' => SOAP_1_1,
            'trace' => true,
        ]);

        //ray($soapClient->__getTypes())->die();
        $soapClient->__setSoapHeaders(WsSecurity::createWsSecuritySoapHeader(
            username: config('medidoc.gln'),
            password: config('medidoc.password'),
        ));


        $checkConnection = (new CheckConnection(config('medidoc.gln'), config('medidoc.password')));

        $response = $soapClient->checkConnection($checkConnection);

        ray(
            $soapClient->__getLastRequest(),
            $soapClient->__getLastResponse(),
            $response
        );

        return self::SUCCESS;
    }
}
