<?php

namespace Smartprax\Medidoc\Responses;

use Smartprax\Medidoc\Entities\Address;

class AddressResponse extends GenericResponse
{
    public function __construct(
        public string $FolderGID,
        public string $DocumentGID,
        public Address $AddressEntity,
        public bool $ElectronicDispatchment
    )
    {}
}
