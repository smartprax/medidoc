<?php

namespace Smartprax\Medidoc\Type;

class PatientData
{
    private string $AhvNumber;

    private string $MobilePhoneNumber;

    private string $Email;

    public function getAhvNumber(): string
    {
        return $this->AhvNumber;
    }

    public function withAhvNumber(string $AhvNumber): PatientData|static
    {
        $new = clone $this;
        $new->AhvNumber = $AhvNumber;

        return $new;
    }

    public function getMobilePhoneNumber(): string
    {
        return $this->MobilePhoneNumber;
    }

    public function withMobilePhoneNumber(string $MobilePhoneNumber): PatientData|static
    {
        $new = clone $this;
        $new->MobilePhoneNumber = $MobilePhoneNumber;

        return $new;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    public function withEmail(string $Email): PatientData|static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }
}
