<?php

namespace Smartprax\Medidoc\Entities;

use Illuminate\Support\Collection;

class PersonOrOrganization
{
    public function __construct(
        public int $PartnerID,
        public string $Gln,
        public string $Organisation,
        public string $Department,
        public string $Title,
        public string $Salutation,
        public string $FirstName,
        public string $LastName,
        public string $Street,
        public string $Pobox,
        public int $Zip,
        public string $City,
        public string $Canton,
        public string $Country,
        public string $Phone,
        public string $Fax,
        public string $Url,
        public string $Email,
        public string $Zsr,
        public string $KNumber,
        public int $OrgRole,
        public bool $IsActive,

        /** @var CodeValue[]|null $ImprovementList */
        public ?Collection $ImprovementList = null,

        /** @var CodeValue[]|null $SkillList */
        public ?Collection $SkillList = null,

        /** @var CodeValue[]|null $EmphaseList */
        public ?Collection $EmphaseList = null,
    ) {
    }
}
