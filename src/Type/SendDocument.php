<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendDocument implements RequestInterface
{
    public function __construct(private DocumentData $documentData)
    {
    }

    public function getDocumentData(): DocumentData
    {
        return $this->documentData;
    }

    public function withDocumentData(DocumentData $documentData): SendDocument|static
    {
        $new = clone $this;
        $new->documentData = $documentData;

        return $new;
    }
}
