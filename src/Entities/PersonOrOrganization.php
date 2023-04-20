<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Entities;

use Illuminate\Support\Collection;

class PersonOrOrganization
{
    public function __construct(
        public readonly int $PartnerID,
        public readonly string $Gln,
        public readonly string $Organisation,
        public readonly string $Department,
        public readonly string $Title,
        public readonly string $Salutation,
        public readonly string $FirstName,
        public readonly string $LastName,
        public readonly string $Street,
        public readonly string $Pobox,
        public readonly int $Zip,
        public readonly string $City,
        public readonly string $Canton,
        public readonly string $Country,
        public readonly string $Phone,
        public readonly string $Fax,
        public readonly string $Url,
        public readonly string $Email,
        public readonly string $Zsr,
        public readonly string $KNumber,
        public readonly int $OrgRole,
        public readonly bool $IsActive,

        /** @var CodeValue[]|null $ImprovementList */
        public readonly ?Collection $ImprovementList = null,

        /** @var CodeValue[]|null $SkillList */
        public readonly ?Collection $SkillList = null,

        /** @var CodeValue[]|null $EmphaseList */
        public readonly ?Collection $EmphaseList = null,
    ) {
    }
}
