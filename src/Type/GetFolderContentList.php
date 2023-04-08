<?php

namespace Smartprax\Medidoc\Type;


class GetFolderContentList extends MedidocRequest
{
    public function __construct(public string $medidocFolderGID)
    {}
}
