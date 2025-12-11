<?php

namespace DisciteHtml;

use DisciteHtml\Config\Classes\Element;
use DisciteHtml\Config\Classes\InputClass;
use DisciteHtml\Config\Classes\PairedClass;
use DisciteHtml\Config\Classes\VoidedClass;
use DisciteHtml\Core\HtmlComponents;
use DisciteHtml\Elements\Custom;

class DisciteHtml extends HtmlComponents
{

    public function __construct()
    {
        
    }

    /**
     * Array of childs.
     *
     * @param string $name
     * @param mixed $arguments
     * 
     * @var array<\DisciteHtml\Config\Classes\Element|string|int|float>
     * 
     * @return ?Element
     */
    public static function __callStatic($name, $arguments) : ?Element
    {
        if(class_exists('\\DisciteHtml\\Elements\\Paired\\'.ucfirst($name)))
        {
            $selectedPairedElement = '\\DisciteHtml\\Elements\\Paired\\'.ucfirst($name);
            return new $selectedPairedElement();
        }
        elseif(class_exists('\\DisciteHtml\\Elements\\Voided\\'.ucfirst($name)))
        {
            $selectedVoidedElement = '\\DisciteHtml\\Elements\\Voided\\'.ucfirst($name);
            return new $selectedVoidedElement();
        }
        else
        {
            return new Custom($name);
        }

        return null;
    }

    public static function presets(Element|PairedClass|VoidedClass|InputClass &$preset)
    {
        $preset->preset(true);
    }

}

?>