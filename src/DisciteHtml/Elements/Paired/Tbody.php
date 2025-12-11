<?php

namespace DisciteHtml\Elements\Paired;

use DisciteHtml\Config\Classes\Element;
use DisciteHtml\Config\Classes\PairedClass;
use DisciteHtml\Config\Enums\Inputs\InputType;
use DisciteHtml\DisciteHtml;

/**
 * Class tbody
 *
 * Represents an HTML anchor (<tbody>) element.
 * 
 * 
 * @package DisciteHtml\Elements\Paired
 */
final class Tbody extends PairedClass
{
    protected string $tag = 'tbody';

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

    protected bool $hasCheckbox = false;

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
     * Default element for empty database. 
     * 
     * @var Element|null
    */
    protected ?Element $defaultEmptyDatabase;


    /** 
     * Converts the element to HTML string.
     * 
     * @return string The HTML string representation of the element.
    */
    public function toHtml(): string
    {
        if(sizeof($this->childs()) == 0 && isset($this->defaultEmptyDatabase))
        {
            $this->add(
                $this->defaultEmptyDatabase
            );
        }

        return parent::toHtml();
    }


    /**
     * Set a template for a specific column.
     * 
     * @param Td $tdTemplate The template to set for the column.
     * @param int $index The index of the column to set the template for. If -1, appends to the end.
     * 
     * @return static The current Tbody instance.
     */
    public function template(Td $tdTemplate, int $index = -1) : static
    {
        $this->columns[($index != -1 && !isset($this->columns[$index]) ? $index : sizeof($this->columns))] = $tdTemplate->preset(true);

        return $this;
    }


    /**
     * Set the element to display when the database is empty.
     * 
     * @param Element $emptyDatabase The element to display when the database is empty.
     * 
     * @return static The current Tbody instance.
     */
    public function emptyDatabase(Element $emptyDatabase) : static
    {
        $this->defaultEmptyDatabase = DisciteHtml::Tr()
            ->classes(['discite-table-row-empty'])
            ->add(
                DisciteHtml::Td()
                    ->attr('colspan', (string)(($this->hasCheckbox ? 1 : 0) + sizeof($this->columns) + ($this->hasActions ? 1 : 0)))
                    ->classes(['discite-table-empty'])
                    ->add(
                        $emptyDatabase
                    )
                );

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
        return $this->columns[$index] ?? null;
    }

    /** Add multiple rows at once.
     *
     * @param Element|null ...$columnElements The columns to add to a row.
     * 
     * @return static
     */
    public function rows(Element|null ...$columnElements) : static
    {

        $elements = DisciteHtml::Tr()
            ->classes(['discite-table-row'])
            ->datas(['row-index' => (string)(sizeof($this->childs()))]);

        $i = 0;

        if($this->hasCheckbox)
        {
            $elements->add(
                DisciteHtml::Td()
                    ->classes(['discite-table-checkbox'])
                    ->datas(['row-index' => (string)(sizeof($this->childs())),'column-index' => (string)($i)])
                    ->add(
                        $this->defaultCheckboxColumn
                    )
            );
        }

        foreach($columnElements as $element)
        {
            $elements->add(
                ($this->columns[$i] ?? DisciteHtml::Td())
                    ->datas(['row-index' => (string)(sizeof($this->childs())),'column-index' => (string)($i + 1)])
                    ->add(
                        is_null($element) && isset($this->defaultEmptyColumn) ? clone $this->defaultEmptyColumn : $element
                    )
            );

            $i++;
        }

        if($this->hasActions)
        {
            $elements->add(
                DisciteHtml::Td()
                    ->classes(['discite-table-actions'])
                    ->datas(['row-index' => (string)(sizeof($this->childs())),'column-index' => (string)($i + 1)])
                    ->add(
                        $this->defaultActionsColumn
                    )
            );
        }

        $this->add(
            $elements
        );

        return $this;
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
            $this->defaultCheckboxColumn = null;
        }
        else
        {
            $this->hasCheckbox(true);
            $this->defaultCheckboxColumn = $element->preset(true);
        }
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
            $this->defaultActionsColumn = null;
        }
        else
        {
            $this->hasActions(true);
            $this->defaultActionsColumn = $element->preset(true);
        }
        return $this;
    }


    /**
     * Set whether the tbody has a checkbox column.
     *
     * @param bool $hasCheckbox True to enable checkbox column, false to disable.
     * 
     * @return static
     */
    public function hasCheckbox(bool $hasCheckbox) : static
    {
        $this->hasCheckbox = $hasCheckbox;
        return $this;
    }


    /**
     * Set whether the tbody has an actions column.
     *
     * @param bool $hasActions True to enable actions column, false to disable.
     * 
     * @return static
     */
    public function hasActions(bool $hasActions) : static
    {
        $this->hasActions = $hasActions;
        return $this;
    }


    /**
     * Set the element to display for empty columns.
     *
     * @param Element $element The element to display for empty columns.
     * 
     * @return static
     */
    public function defaultEmptyColumn(Element $element) : static
    {
        $this->defaultEmptyColumn = $element;
        return $this;
    }
}

?>