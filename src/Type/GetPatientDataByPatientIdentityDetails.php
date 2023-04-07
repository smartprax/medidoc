<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPatientDataByPatientIdentityDetails implements RequestInterface
{

    public function __construct(
        private $gln,
        private $password,
        private $patientFirstname,
        private $patientLastname,
        private $patientBirthday,
        private $patientGender,
        private $treatmentDate,
        private $zipCode
    ) {
    }

    public function getGln(): string
    {
        return $this->gln;
    }

    public function withGln(string $gln): GetPatientDataByPatientIdentityDetails|static
    {
        $new = clone $this;
        $new->gln = $gln;

        return $new;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): GetPatientDataByPatientIdentityDetails|static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    public function getPatientFirstname(): string
    {
        return $this->patientFirstname;
    }

    public function withPatientFirstname(string $patientFirstname): GetPatientDataByPatientIdentityDetails|static
    {
        $new = clone $this;
        $new->patientFirstname = $patientFirstname;

        return $new;
    }

    public function getPatientLastname(): string
    {
        return $this->patientLastname;
    }

    public function withPatientLastname(string $patientLastname): GetPatientDataByPatientIdentityDetails|static
    {
        $new = clone $this;
        $new->patientLastname = $patientLastname;

        return $new;
    }

    public function getPatientBirthday(): \DateTimeInterface
    {
        return $this->patientBirthday;
    }

    public function withPatientBirthday(\DateTimeInterface $patientBirthday
    ): GetPatientDataByPatientIdentityDetails|static {
        $new = clone $this;
        $new->patientBirthday = $patientBirthday;

        return $new;
    }

    public function getPatientGender(): string
    {
        return $this->patientGender;
    }

    public function withPatientGender(string $patientGender): GetPatientDataByPatientIdentityDetails|static
    {
        $new = clone $this;
        $new->patientGender = $patientGender;

        return $new;
    }

    public function getTreatmentDate(): \DateTimeInterface
    {
        return $this->treatmentDate;
    }

    public function withTreatmentDate(\DateTimeInterface $treatmentDate): GetPatientDataByPatientIdentityDetails|static
    {
        $new = clone $this;
        $new->treatmentDate = $treatmentDate;

        return $new;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function withZipCode(string $zipCode): GetPatientDataByPatientIdentityDetails|static
    {
        $new = clone $this;
        $new->zipCode = $zipCode;

        return $new;
    }
}
