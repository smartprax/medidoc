<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ConvertXmlToPdfResponse implements ResultInterface
{
    private ContentResponse $ConvertXmlToPdfResult;

    public function getConvertXmlToPdfResult(): ContentResponse
    {
        return $this->ConvertXmlToPdfResult;
    }

    public function withConvertXmlToPdfResult(ContentResponse $ConvertXmlToPdfResult): ConvertXmlToPdfResponse|static
    {
        $new = clone $this;
        $new->ConvertXmlToPdfResult = $ConvertXmlToPdfResult;

        return $new;
    }
}
