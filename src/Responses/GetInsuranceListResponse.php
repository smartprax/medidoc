<?php

namespace Smartprax\Medidoc\Responses;

use Phpro\SoapClient\Type\ResultInterface;
use Smartprax\Medidoc\Type\InsuranceListResponse;

class GetInsuranceListResponse implements ResultInterface
{
    public function __construct(public InsuranceListResponse $GetInsuranceListResult)
    {}
}
