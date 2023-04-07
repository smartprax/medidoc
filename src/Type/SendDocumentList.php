<?php

namespace Smartprax\Medidoc\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendDocumentList implements RequestInterface
{
    public function __construct(private ArrayOfDocumentData $documentDataList)
    {
    }

    public function getDocumentDataList(): ArrayOfDocumentData
    {
        return $this->documentDataList;
    }

    public function withDocumentDataList(ArrayOfDocumentData $documentDataList): SendDocumentList|static
    {
        $new = clone $this;
        $new->documentDataList = $documentDataList;

        return $new;
    }
}
