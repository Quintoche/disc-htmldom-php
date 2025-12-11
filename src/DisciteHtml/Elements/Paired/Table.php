<?php

namespace DisciteHtml\Elements\Paired;

use DisciteHtml\Config\Classes\Element;
use DisciteHtml\Config\Classes\PairedClass;
use DisciteHtml\Config\Enums\Inputs\InputType;
use DisciteHtml\DisciteHtml;

/**
 * Class table
 *
 * Represents an HTML anchor (<table>) element.
 * 
 * @package DisciteHtml\Elements\Paired
 */
final class Table extends PairedClass
{
    protected string $tag = 'table';


    /** 
     * Rows templates for the tbody. 
     * 
     * @var array<int, \DisciteHtml\Elements\Paired\Td>
    */
    protected array $columns = [];


    /** 
     * Rows templates for the tbody. 
     * 
     * @var array<int, \DisciteHtml\Elements\Paired\Tr>
    */
    protected array $rows = [];


    /** 
     * Indicates if the table has a checkbox column. 
     * 
     * @var bool
    */
    protected bool $hasCheckbox = false;


    /** 
     * Indicates if the table has an actions column. 
     * 
     * @var bool
    */
    protected bool $hasActions = false;


    /** 
     * Default element for empty columns. 
     * 
     * @var Element|null
    */
    protected ?Element $defaultEmptyColumn;


    /** 
     * Default element for checkbox columns. 
     * 
     * @var Element|null
    */
    protected ?Element $defaultCheckboxColumn;


    /** 
     * Default element for actions columns. 
     * 
     * @var Element|null
    */
    protected ?Element $defaultActionsColumn;

    
    /** 
     * The table header element. 
     * 
     * @var \DisciteHtml\Elements\Paired\Thead
    */
    protected Thead $thead;

    /** 
     * The table body element. 
     * 
     * @var \DisciteHtml\Elements\Paired\Tbody
    */
    protected Tbody $tbody;

    
    /** 
     * The table footer element. 
     * 
     * @var \DisciteHtml\Elements\Paired\Tfoot
    */
    protected Tfoot $tfoot;

    
    public function __construct()
    {
        $this->thead = DisciteHtml::Thead();
        $this->tbody = DisciteHtml::Tbody();
        $this->tfoot = DisciteHtml::Tfoot();

        $this->defaultCheckboxColumn = DisciteHtml::P()->add('');
        $this->defaultEmptyColumn = DisciteHtml::P()->add('');
        $this->defaultActionsColumn = DisciteHtml::P()->add('');
    }


    /** 
     * Converts the element to HTML string.
     * 
     * @return string The HTML string representation of the element.
    */
    public function toHtml() : string
    {
        if(sizeof($this->thead->childs()) > 0) $this->add($this->thead);
        $this->add($this->tbody);
        if(sizeof($this->tfoot->childs()) > 0) $this->add($this->tfoot);

        return parent::toHtml();
    }


    /** Get the thead element.
     * 
     * @return Thead The thead element.
     */
    public function thead() : Thead
    {
        return $this->thead;
    }


    /** Get the tbody element.
     * 
     * @return Tbody The tbody element.
     */
    public function tbody() : Tbody
    {
        return $this->tbody;
    }


    /** Get the tfoot element.
     * 
     * @return Tfoot The tfoot element.
     */
    public function tfoot() : Tfoot
    {
        return $this->tfoot;
    }

    /** Add a header row.
     *
     * @param Element|null ...$columnElements The columns to add to a row.
     * 
     * @return static
     */
    public function header(Element|null ...$columnElements) : static
    {
        $this->thead->rows(...$columnElements);
        return $this;
    }

    /** Add a body row.
     *
     * @param Element|null ...$columnElements The columns to add to a row.
     * 
     * @return static
     */
    public function body(Element|null ...$columnElements) : static
    {
        $this->tbody->rows(...$columnElements);
        return $this;
    }


    /** Set a template for a specific column.
     *
     * @param Td $tdTemplate The template to set for the column.
     * @param int $index The index of the column to set the template for. Default is -1 (append).
     * 
     * @return $this
     */
    public function template(Td $tdTemplate, int $index = -1) : static
    {
        $this->tbody->template($tdTemplate, $index);

        return $this;
    }

    /** Get a template for a specific column.
     *
     * @param int $index The index of the column to get the template for.
     * 
     * @return Element|null The template for the specified column, or null if not set.
     */
    public function row(int $index) : Element|null
    {
        return $this->tbody->row($index) ?? null;
    }


    /** Set the element for checkbox columns.
     *
     * @param Element|null $element The element to set for checkbox columns. If null, disables checkbox column.
     * 
     * @return static
     */
    public function checkbox(?Element $element) : static
    {
        
        if(is_null($element))
        {
            $this->hasCheckbox(false);
        }
        else
        {
            $this->hasCheckbox(true);
        }

        $this->tbody()->checkbox($element);
        
        return $this;
    }


    /** Set the element for actions columns.
     *
     * @param Element|null $element The element to set for actions columns. If null, disables actions column.
     * 
     * @return static
     */
    public function actions(?Element $element) : static
    {
        if(is_null($element))
        {
            $this->hasActions(false);
        }
        else
        {
            $this->hasActions(true);
        }

        $this->tbody()->actions($element);

        return $this;
    }


    /**
     * Set whether the table has a checkbox column.
     *
     * @param bool $hasCheckbox True to enable checkbox column, false to disable.
     * 
     * @return static
     */
    public function hasCheckbox(bool $hasCheckbox) : static
    {
        $this->hasCheckbox = $hasCheckbox;

        $this->thead->hasCheckbox($hasCheckbox);
        $this->tbody->hasCheckbox($hasCheckbox);

        return $this;
    }


    /**
     * Set whether the table has an actions column.
     *
     * @param bool $hasActions True to enable actions column, false to disable.
     * 
     * @return static
     */
    public function hasActions(bool $hasActions) : static
    {
        $this->hasActions = $hasActions;

        $this->thead->hasActions($hasActions);
        $this->tbody->hasActions($hasActions);

        return $this;
    }


    /** Set the element to display for empty columns.
     *
     * @param Element $element The element to display for empty columns.
     * 
     * @return static
     */
    public function defaultEmptyColumn(Element $element) : static
    {
        $this->tbody->defaultEmptyColumn($element);

        return $this;
    }
}

?>