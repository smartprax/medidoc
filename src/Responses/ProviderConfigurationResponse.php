<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\ArrayOfNameValue;

class ProviderConfigurationResponse extends GenericResponse
{
    public function __construct(public ArrayOfNameValue $PropertiesList)
    {}
}
