<?php

namespace Smartprax\Medidoc\Requests;

use Smartprax\Medidoc\Responses\GetFolderContentListResponse;

class GetFolderContentList extends MedidocRequest
{
    public function handle(string $medidocFolderGID) : GetFolderContentListResponse
    {
        return $this->call(\compact('medidocFolderGID'));
    }
}
