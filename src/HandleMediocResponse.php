<?php

namespace Smartprax\Medidoc;

trait HandleMediocResponse
{

    public function handleGenericResponse(\SimpleXMLElement $response) : bool
    {

        if ($response->xpath('//ReturnStatus')[0] !== 1) {
            throw new \Exception($response->xpath('//ReturnMessage')[0]);
        }

        return true;
    }
}
