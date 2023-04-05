<?php
declare(strict_types=1);
namespace Smartprax\Medidoc\Entitites;

class CheckConnection
{

    public function __construct(public string $gln, public string $password)
    {
    }
}
