<?php

declare(strict_types=1);

return [
    # Production
    'endpoint' => env('MEDIDOC_ENDPOINT', 'https://www.medidoc.ch/webservices/MedidocSoapAccessV2.asmx?WSDL'),
    # Test
    #'endpoint' => env('MEDIDOC_ENDPOINT', 'https://test.medidoc.ch/webservices/MedidocSoapAccessV2.asmx?WSDL'),
    'gln' => env('MEDIDOC_GLN'),
    'password' => env('MEDIDOC_PASSWORD'),
];
