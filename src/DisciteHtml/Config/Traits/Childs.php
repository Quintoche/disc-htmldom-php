<?php

namespace DisciteHtml\Config\Traits;

use DisciteHtml\Config\Classes\Element;
use DisciteHtml\Config\Classes\PairedClass;
use DisciteHtml\Config\Classes\staticClosingClass;
use DisciteHtml\Config\Classes\VoidedClass;
use DisciteHtml\DisciteHtml;

/**
 * Trait childs
 *
 * Provides functionality for managing childs.
 *
 * @package DisciteHtml\Config\Traits
 */
trait Childs
{
    /**
     * Array of childs.
     *
     * @var array<\DisciteHtml\Config\Classes\Element|string|int|float>
     */
    private array $childs = [];

    /**
     * Get the array of childs.
     *
     * @return array<\DisciteHtml\Config\Classes\Element|string|int|float>
     */
    public function childs() : array
    {
        return $this->childs;
    }

    /**
     * Add a Child.
     *
     * @param \DisciteHtml\Config\Classes\Element|string|int|float $child The child to add.
     * 
     * @return static
     */
    public function add(Element|string|int|float $child) : static
    {
        $obj = $this->isPreset();

        $obj->childs[] = $child;
        return $obj;
    }
}

?>