<?php

namespace Smartprax\Medidoc\Entities;


class GetFolderContentList extends MedidocRequest
{
    public function __construct(public string $medidocFolderGID)
    {}
}
