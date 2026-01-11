<?php

namespace DisciteHtml\Elements\Paired;

use DisciteHtml\Config\Classes\PairedClass;

/**
 * Class tfoot
 *
 * Represents an HTML anchor (<tfoot>) element.
 * 
 * @package DisciteHtml\Elements\Paired
 */
final class Tfoot extends PairedClass
{
    protected string $tag = 'tfoot';

    /**
     * Count the number of children
     * 
     * @return int
     */
    public function count() : int
    {
        return sizeof($this->childs());
    }
}

?>