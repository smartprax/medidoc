<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetSuvaClaimStatusInfo implements RequestInterface
{
    public function __construct(
        private string $gln,
        private string $password,
        private int $requestType,
        private string $ssn,
        private string $claimNumber,
        private \DateTimeInterface $claimDate,
        private string $firstName,
        private string $lastName,
        private \DateTimeInterface $birthDate,
        private bool $useAlsoTreatmentDate,
        private \DateTimeInterface $treatmentDate
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetSuvaClaimStatusInfo|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetSuvaClaimStatusInfo|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getRequestType(): int
    {
        return $this->requestType;
    }

    public function withRequestType(int $requestType): GetSuvaClaimStatusInfo|static
    {
        $new = clone $this;
        $new->requestType = $requestType;

        return $new;
    }

    public function getSsn(): string
    {
        return $this->ssn;
    }

    public function withSsn(string $ssn): GetSuvaClaimStatusInfo|static
    {
        $new = clone $this;
        $new->ssn = $ssn;

        return $new;
    }

    public function getClaimNumber(): string
    {
        return $this->claimNumber;
    }

    public function withClaimNumber(string $claimNumber): GetSuvaClaimStatusInfo|static
    {
        $new = clone $this;
        $new->claimNumber = $claimNumber;

        return $new;
    }

    public function getClaimDate(): \DateTimeInterface
    {
        return $this->claimDate;
    }

    public function withClaimDate(\DateTimeInterface $claimDate): GetSuvaClaimStatusInfo|static
    {
        $new = clone $this;
        $new->claimDate = $claimDate;

        return $new;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function withFirstName(string $firstName): GetSuvaClaimStatusInfo|static
    {
        $new = clone $this;
        $new->firstName = $firstName;

        return $new;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function withLastName(string $lastName): GetSuvaClaimStatusInfo|static
    {
        $new = clone $this;
        $new->lastName = $lastName;

        return $new;
    }

    public function getBirthDate(): \DateTimeInterface
    {
        return $this->birthDate;
    }

    public function withBirthDate(\DateTimeInterface $birthDate): GetSuvaClaimStatusInfo|static
    {
        $new = clone $this;
        $new->birthDate = $birthDate;

        return $new;
    }

    public function getUseAlsoTreatmentDate(): bool
    {
        return $this->useAlsoTreatmentDate;
    }

    public function withUseAlsoTreatmentDate(bool $useAlsoTreatmentDate): GetSuvaClaimStatusInfo|static
    {
        $new = clone $this;
        $new->useAlsoTreatmentDate = $useAlsoTreatmentDate;

        return $new;
    }

    public function getTreatmentDate(): \DateTimeInterface
    {
        return $this->treatmentDate;
    }

    public function withTreatmentDate(\DateTimeInterface $treatmentDate): GetSuvaClaimStatusInfo|static
    {
        $new = clone $this;
        $new->treatmentDate = $treatmentDate;

        return $new;
    }
}
