<?php

namespace Smartprax\Medidoc\Entities;

use Phpro\SoapClient\Type\ResultInterface;

class GetPatientDataByPatientIdentityDetailsResponse implements ResultInterface
{
    private PatientFullData $GetPatientDataByPatientIdentityDetailsResult;

    public function getGetPatientDataByPatientIdentityDetailsResult(): PatientFullData
    {
        return $this->GetPatientDataByPatientIdentityDetailsResult;
    }

    public function withGetPatientDataByPatientIdentityDetailsResult(
        PatientFullData $GetPatientDataByPatientIdentityDetailsResult
    ): GetPatientDataByPatientIdentityDetailsResponse|static {
        $new = clone $this;
        $new->GetPatientDataByPatientIdentityDetailsResult = $GetPatientDataByPatientIdentityDetailsResult;

        return $new;
    }
}
