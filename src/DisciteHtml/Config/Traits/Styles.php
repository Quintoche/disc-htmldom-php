<?php

namespace DisciteHtml\Config\Traits;

/**
 * Trait Styles
 *
 * Provides functionality for managing styles.
 *
 * @package DisciteHtml\Config\Traits
 */
trait Styles
{
    /**
     * Array of styles.
     *
     * @var array<int,array>
     */
    private array $styles = [];

    public function style(string $key, mixed $value) : static
    {
        $obj = $this->isPreset();

        $obj->styles[$key] = $value;
        return $obj;
    }

    public function styles(?array $styles = null) : array|static
    {
        $obj = $this->isPreset();

        if(is_null($styles))
        {
            return $obj->styles;
        }
        else
        {
            $obj->styles = $styles;
            return $obj;
        }
    }

    /**
     * Check if element has specific style.
     *
     * @return bool True if element has specific style.
     */
    public function hasStyle(string $styleKey) : bool
    {
        return isset($this->styles[$styleKey]);
    }

    /**
     * Check if element has styles.
     *
     * @return bool True if element has styles.
     */
    public function hasStyles() : bool
    {
        return sizeof($this->styles) > 0;
    }

}

?>