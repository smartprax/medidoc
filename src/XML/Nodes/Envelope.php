<?php

namespace Smartprax\Medidoc\XML\Nodes;

use Ramsey\Uuid\Uuid;
use Sabre\Xml\Writer;
use Smartprax\Medidoc\XML\XML_NS;

class Envelope extends NodeBase
{

    public function xmlSerialize(Writer $writer): void
    {
        $writer->write([

            // <envelope:Header>
            'name' => XML_NS::envelope->node('Header'),
            'value' => [

                //<addressing:Action envelope:mustUnderstand="1">http://tempuri.org/IMedidoc/CheckConnection</addressing:Action>
                [
                    'name' => XML_NS::addressing->node('Action'),
                    'attributes' => [
                        XML_NS::envelope->attribute('mustUnderstand') => '1',
                    ],
                    'value' => 'http://tempuri.org/IMedidoc/' . $this->method->name()
                ],

                //<addressing:MessageID>urn:uuid:90e8ecbb-fcf2-4fab-bf0d-6f1ed5ad6166</addressing:MessageID>
                [
                    'name' => XML_NS::addressing->node('MessageID'),
                    'value' => 'urn:uuid:' . Uuid::uuid4(),
                ],

                // <adressing:ReplyTo>
                //            <addressing:Address>http://www.w3.org/2005/08/addressing/anonymous</addressing:Address>
                //        </adressing:ReplyTo>
                [
                    'name' => XML_NS::addressing->node('ReplyTo'),
                    'value' => [
                        'name' => XML_NS::addressing->node('Address'),
                        'value' => 'http://www.w3.org/2005/08/addressing/anonymous'
                    ],
                ],

                //<addressing:To envelope:mustUnderstand="1">https://test.medidoc.ch/WebServices/MedidocAccessV3.svc</addressing:To>
                [
                    'name' => XML_NS::addressing->node('To'),
                    'attributes' => [
                        XML_NS::envelope->attribute('mustUnderstand') => '1',
                    ],
                    'value' => 'https://test.medidoc.ch/WebServices/MedidocAccessV3.svc',
                ],
            ]
        ]);
    }
}
