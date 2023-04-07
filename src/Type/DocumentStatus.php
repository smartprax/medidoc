<?php

namespace Smartprax\Medidoc\Type;

class DocumentStatus
{
    private \DateTimeInterface $StatusChangeDate;

    private int $DocumentWorkflowStatus;

    private string $AdditionalInformation;

    public function getStatusChangeDate(): \DateTimeInterface
    {
        return $this->StatusChangeDate;
    }

    public function withStatusChangeDate(\DateTimeInterface $StatusChangeDate): DocumentStatus|static
    {
        $new = clone $this;
        $new->StatusChangeDate = $StatusChangeDate;

        return $new;
    }

    public function getDocumentWorkflowStatus(): int
    {
        return $this->DocumentWorkflowStatus;
    }

    public function withDocumentWorkflowStatus(int $DocumentWorkflowStatus): DocumentStatus|static
    {
        $new = clone $this;
        $new->DocumentWorkflowStatus = $DocumentWorkflowStatus;

        return $new;
    }

    public function getAdditionalInformation(): string
    {
        return $this->AdditionalInformation;
    }

    public function withAdditionalInformation(string $AdditionalInformation): DocumentStatus|static
    {
        $new = clone $this;
        $new->AdditionalInformation = $AdditionalInformation;

        return $new;
    }
}
