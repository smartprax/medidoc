<?php

declare(strict_types=1);

namespace Smartprax\Medidoc\Enums;

enum ContentFormatEnum: int
{
    case NotSet = 0;
    case XmlInvoiceV430 = 1;
    case XmlInvoiceV440 = 2;
    case PdfInvoice = 3;
    case XmlFormV430 = 4;
    case XmlCreditV430 = 5;
    case XmlContainerV430 = 6;
    case XmlMcdV430 = 7;
    case XmlInvoiceV450 = 8;
    case XmlNotificationV451 = 9;
    case XmlCreditV450 = 10;
    case XmlFormV450 = 11;
    case Doc = 110;
    case Docx = 111;
    case Xls = 120;
    case Xlsx = 121;
    case Ppt = 130;
    case Pptx = 131;
    case Txt = 140;
    case Msg = 150;
    case Jpeg = 200;
    case Jpg = 201;
    case Gif = 202;
    case Png = 203;
    case XmlInvoiceResponseV430 = 300;
    case XmlInvoiceResponseV440 = 301;
    case XmlCreditResponseV430 = 302;
    case XmlInvoiceResponseV410 = 303;
    case XmlMcdResponseV430 = 304;
    case XmlInvoiceResponseV450 = 305;
    case XmlCreditResponseV450 = 306;
    case XmlFormResponseV430 = 307;
    case XmlFormResponseV450 = 308;

}
