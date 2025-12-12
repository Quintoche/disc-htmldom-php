<?php

namespace DisciteHtml\Elements\Paired;

use DisciteHtml\Config\Classes\PairedClass;


/**
 * Class Path
 *
 * Represents an HTML anchor (<path>) element.
 * 
 * @package DisciteHtml\Elements\Paired
 */
final class Path extends PairedClass
{
    protected string $tag = 'path';

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
     * Sets the stroke attribute of the SVG element.
     *
     * @param string $value The stroke color value to set (e.g., '#ff0000' or 'red').
     * @return static Returns the current instance for method chaining.
     */
    public function stroke(string $value) : static
    {
        $this->attr('stroke', $value);
        return $this;
    }

    /**
     * Sets the stroke-width attribute of the SVG element.
     *
     * @param string $value The stroke width value to set (e.g., '2' or '0.5').
     * @return static Returns the current instance for method chaining.
     */
    public function strokeWidth(string $value) : static
    {
        $this->attr('stroke-width', $value);
        return $this;
    }

    /**
     * Sets the 'd' attribute of the path element.
     *
     * @param string $value The 'd' attribute value to set (e.g., 'M10 10 H 90 V 90 H 10 Z').
     * @return static Returns the current instance for method chaining.
     */
    public function d(string $value) : static
    {
        $this->attr('d', $value);
        return $this;
    }
    
}

?>