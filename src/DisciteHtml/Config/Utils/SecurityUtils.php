<?php

namespace DisciteHtml\Config\Utils;

use DisciteHtml\Config\Enums\SecurityAllowed;

class SecurityUtils
{
    public static function escape(?string $text) : string
    {
        if ($text === null) return '';
        return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    public static function allowAttribute(string|object $class, string $attribute) : bool
    {
        $thisClass = (is_string($class)) ? $class : $class::class;
        $thisAttribute = strtoupper($attribute);

        $selectedElement = '\\DisciteHtml\\Config\\Enums\\SecurityAllowed::'.$thisAttribute;

        return defined($selectedElement) ? in_array($thisClass,constant($selectedElement)) : true;
    }
}

?>