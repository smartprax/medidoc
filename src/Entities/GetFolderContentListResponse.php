<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class GetFolderContentListResponse implements ResultInterface
{
    private FolderContentResponse $GetFolderContentListResult;

    public function getGetFolderContentListResult(): FolderContentResponse
    {
        return $this->GetFolderContentListResult;
    }

    public function withGetFolderContentListResult(FolderContentResponse $GetFolderContentListResult
    ): GetFolderContentListResponse|static {
        $new = clone $this;
        $new->GetFolderContentListResult = $GetFolderContentListResult;

        return $new;
    }
}
