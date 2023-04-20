<?php

declare(strict_types=1);

return [
    'endpoint' => env('MEDIDOC_ENDPOINT', 'https://test.medidoc.ch/webservices/MedidocSoapAccessV2.asmx?WSDL'),
    'gln' => env('MEDIDOC_GLN'),
    'password' => env('MEDIDOC_PASSWORD'),
];
