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

