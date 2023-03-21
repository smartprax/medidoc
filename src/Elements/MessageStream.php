<?php

namespace Smartprax\Medidoc\Elements;

use Illuminate\Support\Facades\Storage;
use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class MessageStream implements XmlSerializable
{

    public string $fileContents;

    public function __construct(string $filePath)
    {
        $this->fileContents = Storage::read($filePath);
    }

    public function xmlSerialize(Writer $writer): void
    {
        $ns = 'c:';

        $writer->write([

            [
                'name' => '__identity',
                'attributes' => [
                    'xmlns' => 'http://schemas.datacontract.org/2004/07/System',
                    'i:nil' => true,
                ]
            ],

            $ns . '_buffer' => base64_encode($this->fileContents),
            $ns . '_capacity' => strlen($this->fileContents),
            $ns . '_expandable' => true,
            $ns . '_exposable' => true,
            $ns . '_isOpen' => true,
            $ns . '_length' => strlen($this->fileContents),
            $ns . '_origin' => 0,
            $ns . '_position' => strlen($this->fileContents),
            $ns . '_writable' => true,

        ]);
    }
}
