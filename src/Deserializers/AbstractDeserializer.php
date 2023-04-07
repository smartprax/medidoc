<?php

namespace Smartprax\Medidoc\Deserializers;

use Illuminate\Support\Str;
use Sabre\Xml\XmlDeserializable;

abstract class AbstractDeserializer implements XmlDeserializable
{
    /**
     * Auto resolve the entity class in the Smartprax\Medidoc\Entitites namespace based on the name.
     *
     * @return string
     */
    protected function entityClass(): string
    {
        return  Str::of(get_class($this))
            ->replace('\\', '/', )
            ->basename()
            ->replace('Serializer', '')
            ->prepend('Smartprax\Medidoc\Entitites\\');
    }

}
