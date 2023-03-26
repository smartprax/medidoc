<?php

namespace Smartprax\Medidoc\Methods;

use Sabre\Xml\Writer;

class CheckConnection extends Method
{

    public function xmlSerialize(Writer $writer): void
    {
        $writer->write([
            [
                'name' => 'gln',
                'value' => \config('medidoc.gln')
            ],
            [
                'name' => 'password',
                'value' => \config('medidoc.password')
            ],
        ]);
    }
}
