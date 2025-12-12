<?php

namespace DisciteHtml\Elements\Paired;

use DisciteHtml\Config\Classes\PairedClass;


/**
 * Class Svg
 *
 * Represents an HTML anchor (<svg>) element.
 * 
 * @package DisciteHtml\Elements\Paired
 */
final class Svg extends PairedClass
{
    protected string $tag = 'svg';

    /**
     * Sets the fill color of the SVG element.
     *
     * @param string $color The fill color to set (e.g., '#ff0000' or 'red').
     * @return static Returns the current instance for method chaining.
     */
    public function fill(string $color) : static
    {
        $this->attr('fill', $color);
        return $this;
    }

    /**
     * Sets the viewBox attribute of the SVG element.
     *
     * @param string $value The viewBox value to set (e.g., '0 0 100 100').
     * @return static Returns the current instance for method chaining.
     */
    public function viewBox(string $value) : static
    {
        $this->attr('viewBox', $value);
        return $this;
    }
    
}

?>