<?php

namespace Smartprax\Medidoc\Responses;

class GetFolderContentListResponse extends GenericResponse
{
    public function __construct(public FolderContentResponse $GetFolderContentListResult)
    {
    }
}
