<?php

namespace DisciteHtml\Config\Traits;

/**
 * Trait Data
 *
 * Provides functionality for managing data.
 *
 * @package DisciteHtml\Config\Traits
 */
trait Data
{
    /**
     * Array of Data.
     *
     * @var array<int,array>
     */
    private array $data = [];

    public function datas(?array $datas = null) : static|array
    {
        $obj = $this->isPreset();
        
        if(is_null($datas))
        {
            return $obj->data;
        }
        else
        {
            $obj->data = $datas;
            return $obj;
        }
    }

    /**
     * Add a Data.
     *
     * @param string $dataName The Data name.
     * @param mixed $dataValue The Data value.
     * 
     * @return static
     */
    public function data(string $dataName, mixed $dataValue) : static
    {
        $obj = $this->isPreset();

        $obj->data[$dataName] = $dataValue;
        return $obj;
    }

    /**
     * Remove a specific Data.
     *
     * @param string $dataName The Data element to remove.
     * @return static The current instance for method chaining.
     */
    public function removeData(string $dataName) : static
    {
        $obj = $this->isPreset();

        if(isset($obj->data[$dataName]))
        {
            unset($obj->data[$dataName]);
        }
        return $obj;
    }

    /**
     * Check if a specific Data exists.
     *
     * @param string $dataName The Data element to check.
     * @return bool True if the Data exists, false otherwise.
     */
    public function hasData(string $dataName) : bool
    {
        return isset($this->data[$dataName]);
    }

    /**
     * Check if a specific Data exists.
     *
     * @return bool True if the Data exists, false otherwise.
     */
    public function hasDatas() : bool
    {
        return sizeof($this->data) > 0;
    }
}

?>

