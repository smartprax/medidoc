<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfPersonOrOrganization
{
    /** @var PersonOrOrganization[] $PersonOrOrganization */
    public function __construct(public array $PersonOrOrganization)
    {}
}
