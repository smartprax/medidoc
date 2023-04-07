<?php

namespace Smartprax\Medidoc\Type;

class ArrayOfGlnPartyData
{
    private GlnPartyData $GlnPartyData;

    public function getGlnPartyData(): GlnPartyData
    {
        return $this->GlnPartyData;
    }

    public function withGlnPartyData(GlnPartyData $GlnPartyData): ArrayOfGlnPartyData|static
    {
        $new = clone $this;
        $new->GlnPartyData = $GlnPartyData;

        return $new;
    }
}
