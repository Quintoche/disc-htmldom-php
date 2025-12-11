<?php

namespace DisciteHtml\Config\Traits;

/**
 * Trait Id
 *
 * Provides functionality for managing an HTML element's ID attribute.
 *
 * @package DisciteHtml\Config\Traits
 */
trait Id
{
    /**
     * The ID of the HTML element.
     *
     * @var string
     */
    protected string $id;

    protected string $title;
    
    public function id(?string $id = null) : static|string|null
    {
        $obj = $this->isPreset();
        
        if(is_null($id))
        {
            return $obj->id;
        }
        else
        {
            $obj->id = $id;
            return $obj;
        }
    }

    public function title(?string $title = null) : static|string|null
    {
        $obj = $this->isPreset();
        
        if(is_null($title))
        {
            return $obj->title;
        }
        else
        {
            $obj->title = $title;
            return $obj;
        }
    }
}

?>