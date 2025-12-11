<?php

namespace DisciteHtml\Config\Classes;

use DisciteHtml\Config\Enums\ElementType;
use DisciteHtml\Config\Traits\Content;

/**
 * Class PairedClass
 *
 * An abstract class representing paired HTML elements with opening and closing tags.
 *
 * @package DisciteHtml\Config\Classes
 */
abstract class VoidedClass extends Element
{
    use Content;

    protected ElementType $type = ElementType::VOIDED_ELEMENT;
}

?>