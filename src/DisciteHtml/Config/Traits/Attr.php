<?php

namespace DisciteHtml\Config\Traits;

use DisciteHtml\Config\Utils\SecurityUtils;

/**
 * Trait Attr
 *
 * Provides functionality for managing Attr.
 *
 * @package DisciteHtml\Config\Traits
 */
trait Attr
{
    /**
     * Array of Attr.
     *
     * @var array<int,array>
     */
    private array $attr = [];

    
    /**
     * Manage Attrs of HTML element.
     * 
     * If parameter isn't provided, Attrs will be returned.
     * However, if you provide Attrs, function will update Attrs and return object. 
     *
     * @param ?array $attrs Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return array The Attrs of the element if no param provided.
     */
    public function attrs(?array $attrs = null) : static|array
    {
        $obj = $this->isPreset();
        
        if(is_null($attrs) || empty($attrs))
        {
            return $obj->attr;
        }
        else
        {
            foreach($attrs as $key => $value)
            {
                $this->attr($key, $value);
            }
            return $obj;
        }
    }

    
    /**
     * Manage Attr of HTML element.
     * 
     * Will update Attr and return object. 
     *
     * @param string $key The key of the attr to set.
     * @param string $value The value of the attr to set.
     * 
     * @return static The element if a param is provided to update him.
     */
    public function attr(string $key, string $value) : static
    {
        $obj = $this->isPreset();

        $obj->attr[$key] = SecurityUtils::escape($value);
        return $obj;
    }

    
    /**
     * Check if a specific attr exists.
     *
     * @param string $attrName The attr element to check.
     * @return bool True if the attr exists, false otherwise.
     */
    public function hasAttr(string $attrName) : bool
    {
        return isset($this->attr[$attrName]);
    }

    
    /**
     * Check if element has attributes.
     *
     * @return bool True if element has attributes.
     */
    public function hasAttrs() : bool
    {
        return sizeof($this->attr) > 0;
    }
}

?>