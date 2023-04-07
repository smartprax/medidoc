<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonOrOrganizationListResponse implements ResultInterface
{
    private PersonOrOrganizationListResponse $GetPersonOrOrganizationListResult;

    public function getGetPersonOrOrganizationListResult(): PersonOrOrganizationListResponse
    {
        return $this->GetPersonOrOrganizationListResult;
    }

    public function withGetPersonOrOrganizationListResult(
        PersonOrOrganizationListResponse $GetPersonOrOrganizationListResult
    ): GetPersonOrOrganizationListResponse|static {
        $new = clone $this;
        $new->GetPersonOrOrganizationListResult = $GetPersonOrOrganizationListResult;

        return $new;
    }
}
