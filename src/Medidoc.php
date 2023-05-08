<?php

declare(strict_types=1);

namespace Smartprax\Medidoc;

use Smartprax\Medidoc\Enums\ReturnStatusEnum;
use stdClass;

class Medidoc
{
    public \SoapClient $client;

    /**
     * @throws \SoapFault
     */
    public function __construct()
    {
        $this->client = new \SoapClient(
            config('medidoc.endpoint'),
            [
                'cache_wsdl' => \WSDL_CACHE_NONE,
                'exceptions' => true,
                'soap_version' => \SOAP_1_2,
                'trace' => true,
            ]);
    }

    /**
     * @throws MedidocException
     * @throws \Exception
     */
    public function call(Methods\MedidocMethod $request, array $parameters): stdClass
    {
        // Call method.
        $response = $this->client->{$request->method()}([
            'gln' => \config('medidoc.gln'),
            'password' => \config('medidoc.password'),
            ...$parameters,
        ]);

        // Error handling.
        $xml = new \SimpleXMLElement($this->client->__getLastResponse());
        $xml->registerXPathNamespace('medidoc', 'http://www.medidoc.ch/SoapWebService');
        $returnStatus = $xml->xpath('//medidoc:ReturnStatus');

        // Unfortunately CheckConnection does not have a ReturnStatus element,
        // So we need to make the check conditional.
        if (count($returnStatus) && (int) $returnStatus[0] !== 1) {

            $status = ReturnStatusEnum::from((int) $returnStatus[0]);

            ray()->xml($this->client->__getLastResponse());

            throw new MedidocException($status->name, $status->value);
        }

        return $response;
    }
}
