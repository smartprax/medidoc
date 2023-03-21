<?php

namespace Smartprax\Medidoc\Enumerations;

enum ContentFormatEnum: int
{
    case NotSet = 1;
    case XmlInvoiceV430 = 2;
    case XmlInvoiceV440 = 3;
    case PdfInvoice = 4;
    case XmlFormV430 = 5;
    case XmlCreditV430 = 6;
    case XmlContainerV430 = 7;
    case XmlMcdV430 = 8;
    case XmlInvoiceV450 = 9;
    case XmlNotificationV451 = 10;
    case XmlCreditV450 = 11;
    case XmlFormV450 = 110;
    case Doc = 111;
    case Docx = 120;
    case Xls = 121;
    case Xlsx = 130;
    case Ppt = 131;
    case Pptx = 140;
    case Txt = 150;
    case Msg = 200;
    case Jpeg = 201;
    case Jpg = 202;
    case Gif = 203;
    case Png = 300;
    case XmlInvoiceResponseV430 = 301;
    case XmlInvoiceResponseV440 = 302;
    case XmlCreditResponseV430 = 303;
    case XmlInvoiceResponseV410 = 304;
    case XmlMcdResponseV430 = 305;
    case XmlInvoiceResponseV450 = 306;
    case XmlCreditResponseV450 = 307;
    case XmlFormResponseV430 = 308;
}
