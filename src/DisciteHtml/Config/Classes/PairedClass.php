<?php

namespace DisciteHtml\Config\Classes;

use DisciteHtml\Config\Enums\ElementType;
use DisciteHtml\Config\Traits\Childs;

/**
 * Class PairedClass
 *
 * An abstract class representing paired HTML elements with opening and closing tags.
 *
 * @package DisciteHtml\Config\Classes
 */
abstract class PairedClass extends Element
{
    use Childs;
    
    protected ElementType $type = ElementType::PAIRED_ELEMENT;
}

?>