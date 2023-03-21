<?php

namespace Smartprax\Medidoc\Entitites;

use Smartprax\Medidoc\Enumerations\ReturnStatusEnum;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\DataCollection;

class InsuranceListResponse extends \Spatie\LaravelData\Data
{

    public function __construct(

        public ReturnStatusEnum $ReturnStatus,

        #[Max(200)]
        public string $ReturnMessage,

         #[DataCollectionOf(InsuranceData::class)]
         public DataCollection $AddressList,
    ) {}
}
