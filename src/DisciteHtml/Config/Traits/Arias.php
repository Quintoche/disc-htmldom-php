<?php

namespace DisciteHtml\Config\Traits;

/**
 * Trait Arias
 *
 * Provides functionality for managing Arias.
 *
 * @package DisciteHtml\Config\Traits
 */
trait Arias
{
    /**
     * Array of Arias.
     *
     * @var array<int,array>
     */
    private array $arias = [];

    public function arias(?array $arias = null) : array|static
    {
        $obj = $this->isPreset();
        
        if(is_null($arias))
        {
            return $obj->arias;
        }
        else
        {
            $obj->arias = $arias;
            return $obj;
        }
    }

    /**
     * Check if a specific Aria exists.
     *
     * @param string $ariaName The Aria element to check.
     * @return bool True if the Aria exists, false otherwise.
     */
    public function hasAria(string $ariaName) : bool
    {
        return isset($this->arias[$ariaName]);
    }

    /**
     * Check if element has aria attributes.
     *
     * @return bool True if element has aria attributes.
     */
    public function hasArias() : bool
    {
        return sizeof($this->arias) > 0;
    }
}

?>