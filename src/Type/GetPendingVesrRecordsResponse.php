<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPendingVesrRecordsResponse implements ResultInterface
{
    private VesrRecordsResponse $GetPendingVesrRecordsResult;

    public function getGetPendingVesrRecordsResult(): VesrRecordsResponse
    {
        return $this->GetPendingVesrRecordsResult;
    }

    public function withGetPendingVesrRecordsResult(VesrRecordsResponse $GetPendingVesrRecordsResult
    ): GetPendingVesrRecordsResponse|static {
        $new = clone $this;
        $new->GetPendingVesrRecordsResult = $GetPendingVesrRecordsResult;

        return $new;
    }
}
