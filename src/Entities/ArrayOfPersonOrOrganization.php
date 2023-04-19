<?php

namespace Smartprax\Medidoc\Entities;

class ArrayOfPersonOrOrganization
{
    /** @var PersonOrOrganization[] */
    public function __construct(public array $PersonOrOrganization)
    {
    }
}
