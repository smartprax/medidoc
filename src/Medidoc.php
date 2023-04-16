<?php

namespace Smartprax\Medidoc;


use Smartprax\Medidoc\Enums\ReturnStatusEnum;
use stdClass;

class Medidoc
{

    public \SoapClient $client;

    public function __construct()
    {
        $this->client = new \SoapClient(
            config('medidoc.endpoint'),
            [
                'cache_wsdl' => \WSDL_CACHE_NONE,
                'exceptions' => true,
                'soap_version' => \SOAP_1_2,
                'trace' => true,
                'classmap' => self::classmap()
            ]);
    }

    public function call(Methods\MedidocMethod $request, array $parameters) : stdClass
    {
        $request_data = [
            'gln' => \config('medidoc.gln'),
            'password' => \config('medidoc.password'),
            ...$parameters
        ];

        // Call method, get response property and handle errors.
        $response = $this->client->{$request->method()}($request_data);

        ray()->xml($this->client->__getLastResponse());
        \ray($response);

        // Error handling.
        $xml = new \SimpleXMLElement($this->client->__getLastResponse());
        $xml->registerXPathNamespace('medidoc', "http://www.medidoc.ch/SoapWebService");
        $returnStatus = $xml->xpath('//medidoc:ReturnStatus');

        // Unfortunately CheckConnection does not have a ReturnStatus element,
        // So we need to make the check conditional.
        if (count($returnStatus) && (int) $returnStatus[0] !== 1) {
            throw new \Exception($xml->xpath('//medidoc::ReturnMessage')[0], ReturnStatusEnum::from($returnStatus[0]));
        }

        return $response;
    }

    public static function classmap() : array
    {
        return [
            'InsuranceData' => Entities\InsuranceData::class,
        ];
    }


}
