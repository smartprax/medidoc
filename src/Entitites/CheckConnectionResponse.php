<?php
declare(strict_types=1);
namespace Smartprax\Medidoc\Entitites;

use JsonSerializable;

class CheckConnectionResponse  implements JsonSerializable
{
    public int $CheckConnectionResult;

    public function jsonSerialize(): mixed
    {
        return $this->CheckConnectionResult;
    }
}
