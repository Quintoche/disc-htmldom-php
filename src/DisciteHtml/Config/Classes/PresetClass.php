<?php

namespace DisciteHtml\Config\Classes;

use DisciteHtml\Config\Enums\ElementType;

/**
 * Class PresetClass
 *
 * An abstract class representing preseted HTML elements.
 *
 * @package DisciteHtml\Config\Classes
 */
abstract class PresetClass extends Element
{
    protected ElementType $type = ElementType::PRESET_ELEMENT;

    protected Element $baseType;

    public function changeType()
    {

    }

    public function changeBase()
    {
        
    }
}

?>