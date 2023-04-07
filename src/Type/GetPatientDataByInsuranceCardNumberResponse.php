<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPatientDataByInsuranceCardNumberResponse implements ResultInterface
{
    private PatientFullData $GetPatientDataByInsuranceCardNumberResult;

    public function getGetPatientDataByInsuranceCardNumberResult(): PatientFullData
    {
        return $this->GetPatientDataByInsuranceCardNumberResult;
    }

    public function withGetPatientDataByInsuranceCardNumberResult(
        PatientFullData $GetPatientDataByInsuranceCardNumberResult
    ): GetPatientDataByInsuranceCardNumberResponse|static {
        $new = clone $this;
        $new->GetPatientDataByInsuranceCardNumberResult = $GetPatientDataByInsuranceCardNumberResult;

        return $new;
    }
}
