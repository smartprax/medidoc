<?php

namespace Smartprax\Medidoc\Type;

class NotificationReferenceInfo
{
    private int $Timestamp;

    private \DateTimeInterface $Date;

    private string $Id;

    public function getTimestamp(): int
    {
        return $this->Timestamp;
    }

    public function withTimestamp(int $Timestamp): NotificationReferenceInfo|static
    {
        $new = clone $this;
        $new->Timestamp = $Timestamp;

        return $new;
    }

    public function getDate(): \DateTimeInterface
    {
        return $this->Date;
    }

    public function withDate(\DateTimeInterface $Date): NotificationReferenceInfo|static
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    public function getId(): string
    {
        return $this->Id;
    }

    public function withId(string $Id): NotificationReferenceInfo|static
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }
}
