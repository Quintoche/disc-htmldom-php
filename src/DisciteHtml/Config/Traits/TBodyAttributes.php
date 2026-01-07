<?php

namespace DisciteHtml\Config\Traits;

trait TBodyAttributes
{
    protected string $columnIndexData = 'column-index';
    protected string $rowIndexData = 'row-index';
    

    protected string $rowClass = 'discite-table-row';
    
    protected string $checkboxClass = 'discite-table-row-checkbox';
    protected string $columnClass = 'discite-table-row-column';
    protected string $actionsClass = 'discite-table-row-actions';
    protected string $emptyClass = 'discite-table-row-empty';

    protected string $emptyTableClass = 'discite-table-empty';
    
    
    /** 
     * Get or set the column index data attribute name.
     *
     * @param string|null $data The data attribute name to set. Null to get the current value.
     * 
     * @return static|string
     */
    public function columnIndexData(?string $data = null) : static|string
    {
        if(is_null($data))
        {
            return $this->columnIndexData;
        }
        else
        {
            $this->columnIndexData = $data;
            return $this;
        }
    }
    
    /** 
     * Get or set the row index data attribute name.
     *
     * @param string|null $data The data attribute name to set. Null to get the current value.
     * 
     * @return static|string
     */
    public function rowIndexData(?string $data = null) : static|string
    {
        if(is_null($data))
        {
            return $this->rowIndexData;
        }
        else
        {
            $this->rowIndexData = $data;
            return $this;
        }
    }

    /** 
     * Get or set the row class name.
     *
     * @param string|null $class The class name to set. Null to get the current value.
     * 
     * @return static|string
     */
    public function rowClass(?string $class = null) : static|string
    {
        if(is_null($class))
        {
            return $this->rowClass;
        }
        else
        {
            $this->rowClass = $class;
            return $this;
        }
    }

    /** 
     * Get or set the checkbox class.
     *
     * @param string|null $class The class to set. Null to get the current value.
     * 
     * @return static|string
     */
    public function checkboxClass(?string $class = null) : static|string
    {
        if(is_null($class))
        {
            return $this->checkboxClass;
        }
        else
        {
            $this->checkboxClass = $class;
            return $this;
        }
    }

    /** 
     * Get or set the column class.
     *
     * @param string|null $class The class to set. Null to get the current value.
     * 
     * @return static|string
     */
    public function columnClass(?string $class = null) : static|string
    {
        if(is_null($class))
        {
            return $this->columnClass;
        }
        else
        {
            $this->columnClass = $class;
            return $this;
        }
    }

    /** 
     * Get or set the actions column class.
     *
     * @param string|null $class The class to set. Null to get the current value.
     * 
     * @return static|string
     */
    public function actionsClass(?string $class = null) : static|string
    {
        if(is_null($class))
        {
            return $this->actionsClass;
        }
        else
        {
            $this->actionsClass = $class;
            return $this;
        }
    }

    /** 
     * Get or set the empty column class name.
     *
     * @param string|null $class The class name to set. Null to get the current value.
     * 
     * @return static|string
     */
    public function emptyClass(?string $class = null) : static|string
    {
        if(is_null($class))
        {
            return $this->emptyClass;
        }
        else
        {
            $this->emptyClass = $class;
            return $this;
        }
    }

    /** 
     * Get or set the empty table class name.
     *
     * @param string|null $class The class name to set. Null to get the current value.
     * 
     * @return static|string
     */
    public function emptyTableClass(?string $class = null) : static|string
    {
        if(is_null($class))
        {
            return $this->emptyTableClass;
        }
        else
        {
            $this->emptyTableClass = $class;
            return $this;
        }
    }
}

?>