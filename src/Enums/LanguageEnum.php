<?php

namespace Smartprax\Medidoc\Enums;

enum LanguageEnum: string
{
    case de = 'de';
    case fr = 'fr';
    case it = 'it';
    case en = 'en';

    public function string() : string
    {
        return $this->value;
    }
}
