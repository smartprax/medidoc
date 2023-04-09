<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfPersonOrOrganization
{
    /** @var PersonOrOrganization[] $PersonOrOrganization */
    public function __construct(public array $PersonOrOrganization)
    {}
}
