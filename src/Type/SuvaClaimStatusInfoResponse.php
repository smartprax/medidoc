<?php

namespace Smartprax\Medidoc\Type;

class SuvaClaimStatusInfoResponse
{
    private int $ReturnStatus;

    private string $ReturnMessage;

    private string $ClaimCloseDate;

    private string $Agency;

    private string $ClaimNr;

    private string $Statement;

    private int $StatementCode;

    private string $StatementCodeText;

    private int $StatementInfoCode;

    private string $StatementInfoCodeText;

    private string $AccidentDate;

    public function getReturnStatus(): int
    {
        return $this->ReturnStatus;
    }

    public function withReturnStatus(int $ReturnStatus): SuvaClaimStatusInfoResponse|static
    {
        $new = clone $this;
        $new->ReturnStatus = $ReturnStatus;

        return $new;
    }

    public function getReturnMessage(): string
    {
        return $this->ReturnMessage;
    }

    public function withReturnMessage(string $ReturnMessage): SuvaClaimStatusInfoResponse|static
    {
        $new = clone $this;
        $new->ReturnMessage = $ReturnMessage;

        return $new;
    }

    public function getClaimCloseDate(): string
    {
        return $this->ClaimCloseDate;
    }

    public function withClaimCloseDate(string $ClaimCloseDate): SuvaClaimStatusInfoResponse|static
    {
        $new = clone $this;
        $new->ClaimCloseDate = $ClaimCloseDate;

        return $new;
    }

    public function getAgency(): string
    {
        return $this->Agency;
    }

    public function withAgency(string $Agency): SuvaClaimStatusInfoResponse|static
    {
        $new = clone $this;
        $new->Agency = $Agency;

        return $new;
    }

    public function getClaimNr(): string
    {
        return $this->ClaimNr;
    }

    public function withClaimNr(string $ClaimNr): SuvaClaimStatusInfoResponse|static
    {
        $new = clone $this;
        $new->ClaimNr = $ClaimNr;

        return $new;
    }

    public function getStatement(): string
    {
        return $this->Statement;
    }

    public function withStatement(string $Statement): SuvaClaimStatusInfoResponse|static
    {
        $new = clone $this;
        $new->Statement = $Statement;

        return $new;
    }

    public function getStatementCode(): int
    {
        return $this->StatementCode;
    }

    public function withStatementCode(int $StatementCode): SuvaClaimStatusInfoResponse|static
    {
        $new = clone $this;
        $new->StatementCode = $StatementCode;

        return $new;
    }

    public function getStatementCodeText(): string
    {
        return $this->StatementCodeText;
    }

    public function withStatementCodeText(string $StatementCodeText): SuvaClaimStatusInfoResponse|static
    {
        $new = clone $this;
        $new->StatementCodeText = $StatementCodeText;

        return $new;
    }

    public function getStatementInfoCode(): int
    {
        return $this->StatementInfoCode;
    }

    public function withStatementInfoCode(int $StatementInfoCode): SuvaClaimStatusInfoResponse|static
    {
        $new = clone $this;
        $new->StatementInfoCode = $StatementInfoCode;

        return $new;
    }

    public function getStatementInfoCodeText(): string
    {
        return $this->StatementInfoCodeText;
    }

    public function withStatementInfoCodeText(string $StatementInfoCodeText): SuvaClaimStatusInfoResponse|static
    {
        $new = clone $this;
        $new->StatementInfoCodeText = $StatementInfoCodeText;

        return $new;
    }

    public function getAccidentDate(): string
    {
        return $this->AccidentDate;
    }

    public function withAccidentDate(string $AccidentDate): SuvaClaimStatusInfoResponse|static
    {
        $new = clone $this;
        $new->AccidentDate = $AccidentDate;

        return $new;
    }
}
