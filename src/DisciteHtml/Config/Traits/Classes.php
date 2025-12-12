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


    /**
     * Get or set the CSS classes.
     *
     * @param array|null $classes An array of CSS classes to set, or null to get the current classes.
     * @return static|array The current instance or the array of CSS classes.
     */
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
     * Add a CSS class.
     *
     * @param string $class The CSS class to add.
     * @return static The current instance for method chaining.
     */
    public function class(string $class) : static
    {
        $obj = $this->isPreset();

        if(!in_array($class, $obj->class))
        {
            $obj->class[] = $class;
        }
        return $obj;
    }

    /**
     * Remove a CSS class.
     *
     * @param string $class The CSS class to remove.
     * @return static The current instance for method chaining.
     */
    public function removeClass(string $class) : static
    {
        $obj = $this->isPreset();

        if(($key = array_search($class, $obj->class)) !== false)
        {
            unset($obj->class[$key]);
        }
        return $obj;
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