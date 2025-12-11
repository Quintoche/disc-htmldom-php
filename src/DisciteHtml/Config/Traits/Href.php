<?php

namespace DisciteHtml\Config\Traits;

use DisciteHtml\Config\Utils\SecurityUtils;

/**
 * Trait Href
 *
 * ProvHrefes functionality for managing an HTML element's Href attribute.
 *
 * @package DisciteHtml\Config\Traits
 */
trait Href
{
    /**
     * The href of the HTML element.
     *
     * @var string
     */
    private string $href;

    
    /**
     * The src of the HTML element.
     *
     * @var string
     */
    private string $src;

    
    /**
     * Manage Href of HTML element.
     * 
     * If parameter isn't provided, Href will be returned.
     * However, if you provide Href, function will update href and return object. 
     *
     * @param ?string $href Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return string|null The href of the element if no param provided.
     */
    public function href(?string $href = null) : static|string|null
    {
        $obj = $this->isPreset();

        if(is_null($href))
        {
            return $obj->href;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->href = SecurityUtils::escape($href);
            }
            return $obj;
        }
    }

    
    /**
     * Manage src of HTML element.
     * 
     * If parameter isn't provided, src will be returned.
     * However, if you provide src, function will update src and return object. 
     *
     * @param ?string $src Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return string|null The src of the element if no param provided.
     */
    public function src(?string $src = null) : static|string|null
    {
        $obj = $this->isPreset();

        if(is_null($src))
        {
            return $obj->src;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->src = SecurityUtils::escape($src);
            }
            return $obj;
        }
    }
}

?>