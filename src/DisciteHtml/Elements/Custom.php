<?php

namespace DisciteHtml\Elements;

use DisciteHtml\Config\Classes\PairedClass;
use DisciteHtml\Config\Enums\ElementType;

/**
 * Class Custom
 *
 * Represents an HTML anchor element for a custom created tag.
 * 
 * @package DisciteHtml\Elements\Paired
 */
final class Custom extends PairedClass
{
    protected string $tag = '';

    public function __construct(string $tag, ElementType $type = ElementType::PAIRED_ELEMENT)
    {
        $this->tag = $tag;

        $this->$type = match($type) {
            ElementType::PAIRED_ELEMENT => ElementType::PAIRED_ELEMENT,
            ElementType::VOIDED_ELEMENT => ElementType::VOIDED_ELEMENT,
            default => ElementType::PAIRED_ELEMENT,
        };
    }
}

?>