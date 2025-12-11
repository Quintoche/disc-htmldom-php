<?php

namespace DisciteHtml\Config\Traits;

use DisciteHtml\Config\Utils\SecurityUtils;

/**
 * Trait ForLabel
 *
 * ProvHrefes functionality for managing an HTML element's For attribute.
 *
 * @package DisciteHtml\Config\Traits
 */
trait ForLabel
{
    /**
     * The href of the HTML element.
     *
     * @var string
     */
    private string $for;

    
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
    public function for(?string $for = null) : static|string|null
    {
        $obj = $this->isPreset();

        if(is_null($for))
        {
            return $obj->for;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->for = SecurityUtils::escape($for);
            }
            return $obj;
        }
    }
}

?>