<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetInsuranceListResponse implements ResultInterface
{
    public function __construct(public InsuranceListResponse $GetInsuranceListResult)
    {}
}
