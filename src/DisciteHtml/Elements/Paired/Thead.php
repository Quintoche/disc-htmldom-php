<?php

namespace DisciteHtml\Elements\Paired;

use DisciteHtml\Config\Classes\Element;
use DisciteHtml\Config\Classes\PairedClass;
use DisciteHtml\Config\Classes\THeadClass;
use DisciteHtml\DisciteHtml;

/**
 * Class thead
 *
 * Represents an HTML anchor (<thead>) element.
 * 
 * @package DisciteHtml\Elements\Paired
 */
final class Thead extends PairedClass
{
    protected string $tag = 'thead';

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
     * Indicates if the table has created a checkbox column. 
     * 
     * @var bool
    */
    protected bool $checkBoxAdded = false;

    /** 
     * Indicates if the table has created an actions column. 
     * 
     * @var bool
    */
    protected bool $actionsAdded = false;


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
     * Table classes configuration. 
     * 
     * @var THeadClass
    */
    protected THeadClass $attributes;

    
    public function __construct()
    {
        $this->attributes = new THeadClass();
        
        $this->defaultCheckboxColumn = DisciteHtml::P()->add('');
        $this->defaultEmptyColumn = DisciteHtml::P()->add('');
        $this->defaultActionsColumn = DisciteHtml::P()->add('');
    }

    /** 
     * Get the table classes configuration.
     * 
     * @return THeadClass
    */
    public function attributes() : THeadClass
    {
        return $this->attributes;
    }

    public function toHtml(): string
    {
        $this->formatColumns();
        return parent::toHtml();
    }

    /** Set a template for a specific column.
     *
     * @param Th $tdTemplate The template to set for the column.
     * @param int $index The index of the column to set the template for. If -1, appends to the end.
     * 
     * @return static
     */
    public function template(Th $tdTemplate, int $index = -1) : static
    {
        $this->columns[($index != -1 && !isset($this->columns[$index]) ? $index : sizeof($this->columns))] = $tdTemplate;

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

    /** Add a single column at once.
     *
     * @param Element|null $columnElement The column to add to a row.
     * 
     * @return $this
     */
    public function column(Element|null $columnElement) : static
    {   
        $this->rows[] = $this->columns[count($this->rows) + 1] ?? DisciteHtml::Th()
                ->data($this->attributes()->columnIndexData(), (string)(count($this->rows) + 1))
                ->add(
                    is_null($columnElement) && isset($this->defaultEmptyColumn) ? clone $this->defaultEmptyColumn : $columnElement
                );
    
        return $this;
    }


    /** Add multiple columns at once.
     *
     * @param Element|null ...$columnElements The columns to add to a row.
     * 
     * @return $this
     */
    public function columns(Element|null ...$columnElements) : static
    {
        $elements = DisciteHtml::Tr()
            ->class($this->attributes()->rowClass());

        $i = 0;

        if($this->hasCheckbox && !$this->checkBoxAdded)
        {
            $elements->add(
                DisciteHtml::Th()
                    ->class($this->attributes()->checkboxClass())
                    ->data($this->attributes()->columnIndexData(), (string)($i))
                    ->add(
                        $this->defaultCheckboxColumn
                    )
            );

            $this->checkBoxAdded = true;
        }
        
        foreach($columnElements as $element)
        {
            $elements->add(
                $this->columns[$i] ?? DisciteHtml::Th()
                    ->class(is_null($element) && isset($this->defaultEmptyColumn) ? $this->attributes()->emptyClass() : $this->attributes()->columnClass())
                    ->data($this->attributes()->columnIndexData(), (string)($i + 1))
                    ->add(
                        is_null($element) && isset($this->defaultEmptyColumn) ? clone $this->defaultEmptyColumn : $element
                    )
            );
        }

        if($this->hasActions && !$this->actionsAdded)
        {
            $elements->add(
                DisciteHtml::Th()
                    ->class($this->attributes()->actionsClass())
                    ->data($this->attributes()->columnIndexData(), (string)($i + 1))
                    ->add(
                        $this->defaultActionsColumn
                    )
            );

            $this->actionsAdded = true;
        }

        $this->add(
            $elements
        );

        return $this;
    }


    /** Set the checkbox column element.
     *
     * @param Element|null $element The element to use for the checkbox column. Null to disable.
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
            $this->defaultCheckboxColumn = $element;
        }
        return $this;
    }


    /** Set the actions column element.
     *
     * @param Element|null $element The element to use for the actions column. Null to disable.
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
            $this->defaultActionsColumn = $element;
        }
        return $this;
    }


    /** Set whether the table has a checkbox column.
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


    /** Set whether the table has an actions column.
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


    /** Set the element to display for empty columns.
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

    /** 
     * Format the columns for the thead.
     * 
     * Format columns by adding checkbox and actions columns if enabled, before and after the defined columns respectively.
     * Function does not return anything, modifies the internal state before creating html.
     *
     * @return void
     */
    protected function formatColumns() : void
    {
        $elements = DisciteHtml::Tr()
            ->class($this->attributes()->rowClass());

        if($this->hasCheckbox && !$this->checkBoxAdded)
        {
            $elements->add(
                DisciteHtml::Th()
                    ->class($this->attributes()->checkboxClass())
                    ->data($this->attributes()->columnIndexData(), '0')
                    ->add(
                        $this->defaultCheckboxColumn
                    )
            );

            $this->checkBoxAdded = true;
        }

        foreach($this->rows as $i => $columnElement)
        {
            $elements->add(
                $this->columns[$i] ?? DisciteHtml::Th()
                    ->class(is_null($columnElement) && isset($this->defaultEmptyColumn) ? $this->attributes()->emptyClass() : $this->attributes()->columnClass())
                    ->data($this->attributes()->columnIndexData(), (string)($i + 1))
                    ->add(
                        is_null($columnElement) && isset($this->defaultEmptyColumn) ? clone $this->defaultEmptyColumn : $columnElement
                    )
            );
        }

        if($this->hasActions && !$this->actionsAdded)
        {
            $elements->add(
                DisciteHtml::Th()
                    ->class($this->attributes()->actionsClass())
                    ->data($this->attributes()->columnIndexData(), (string)(count($this->rows) + 2))
                    ->add(
                        $this->defaultActionsColumn
                    )
            );

            $this->actionsAdded = true;
        }
    }
}

?>