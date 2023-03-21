<?php

namespace Smartprax\Medidoc\Serializers;

use Illuminate\Support\Str;
use Sabre\Xml\XmlSerializable;
use Smartprax\Medidoc\Entitites\DocumentData;
use Spatie\LaravelData\Data;

abstract class AbstractSerializer implements XmlSerializable
{
    /**
     * Auto resolve the entity class in the Smartprax\Medidoc\Entitites namespace based on the name.
     *
     * @return string
     */
    protected function entityClass() : string
    {
        return  Str::of(get_class($this))
            ->replace('\\', '/', )
            ->basename()
            ->replace('Serializer', '')
            ->prepend('Smartprax\Medidoc\Entitites\\');
    }
}
