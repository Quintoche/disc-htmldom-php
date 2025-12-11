<?php

namespace DisciteHtml\Config\Traits;

use DisciteHtml\Config\Utils\SecurityUtils;

/**
 * Trait SelfAttr
 *
 * Provides functionality for managing SelfAttr.
 *
 * @package DisciteHtml\Config\Traits
 */
trait SelfAttr
{
    /**
     * Array of SelfAttr.
     *
     * @var array<int,string>
     */
    private array $selfAttr = [];

    /**
     * Manage SelfAttrs of HTML element.
     * 
     * 
     * If no parameter is provided, SelfAttrs are returned (getter).
     * If parameters are provided, they are added and the element itself is returned (setter).
     *
     * @param ?string ...$selfAttr Attributes to set.
     * 
     * @return static If attributes are provided.
     * @return array  If called with no parameter (returns current selfAttrs).
     */
    public function selfAttrs(?string ...$selfAttr): static|array
    {
        $obj = $this->isPreset();
        
        if(is_null($selfAttr) || empty($selfAttr))
        {
            return $obj->selfAttr;
        }
        else
        {
            foreach($selfAttr as $attr)
            {
                $this->selfAttr($attr);
            }
            return $obj;
        }
    }

    /**
     * Manage SelfAttr of HTML element.
     * 
     * If parameter isn't provided, SelfAttr will be returned.
     * However, if you provide SelfAttr, function will update SelfAttr and return object. 
     *
     * @param ?string $selfAttr Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return array The SelfAttr of the element if no param provided.
     */
    public function selfAttr(?string $selfAttr = null) : static|array
    {
        $obj = $this->isPreset();
        
        if(is_null($selfAttr))
        {
            return $obj->selfAttr;
        }
        else
        {
            $obj->selfAttr[] = SecurityUtils::escape($selfAttr);
            return $obj;
        }
    }

    /**
     * Check if a specific attr exists.
     *
     * @param string $attrName The attr element to check.
     * @return bool True if the attr exists, false otherwise.
     */
    public function hasSelfAttr(string $attrName) : bool
    {
        return isset($this->selfAttr[$attrName]);
    }

    /**
     * Check if element has attributes.
     *
     * @return bool True if element has attributes.
     */
    public function hasSelfAttrs() : bool
    {
        return sizeof($this->selfAttr) > 0;
    }
}

?>