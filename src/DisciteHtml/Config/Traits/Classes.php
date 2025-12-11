<?php

namespace DisciteHtml\Config\Traits;

/**
 * Trait Classes
 *
 * Provides functionality for managing CSS classes.
 *
 * @package DisciteHtml\Config\Traits
 */
trait Classes
{
    /**
     * Array of CSS classes.
     *
     * @var array
     */
    private array $class = [];


    public function classes(?array $classes = null) : static|array
    {
        $obj = $this->isPreset();
        
        if(is_null($classes))
        {
            return $obj->class;
        }
        else
        {
            $obj->class = $classes;
            return $obj;
        }
    }

    /**
     * Check if a specific CSS class exists.
     *
     * @param string $class The CSS class to check.
     * @return bool True if the class exists, false otherwise.
     */
    public function hasClass(string $class) : bool
    {
        return in_array($class, $this->class);
    }

    /**
     * Check if element has classes.
     *
     * @return bool True if has childrens
     */
    public function hasClasses() : bool
    {
        return sizeof($this->class) > 0;
    }
}

?>