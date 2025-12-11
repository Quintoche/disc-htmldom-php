<?php

namespace DisciteHtml\Elements\Paired;

use DisciteHtml\Config\Classes\Element;
use DisciteHtml\Config\Classes\PairedClass;
use DisciteHtml\Config\Enums\Inputs\InputType;
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

    
    public function __construct()
    {
        $this->defaultCheckboxColumn = DisciteHtml::P()->add('');
        $this->defaultEmptyColumn = DisciteHtml::P()->add('');
        $this->defaultActionsColumn = DisciteHtml::P()->add('');
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

    /** Add multiple rows at once.
     *
     * @param Element|null ...$columnElements The columns to add to a row.
     * 
     * @return $this
     */
    public function rows(Element|null ...$columnElements) : static
    {
        $elements = DisciteHtml::Tr()
            ->classes(['discite-table-head-row']);

        $i = 0;

        if($this->hasCheckbox)
        {
            $elements->add(
                DisciteHtml::Th()
                    ->classes(['discite-table-head-row-checkbox'])
                    ->datas(['column-index' => (string)($i)])
                    ->add(
                        $this->defaultCheckboxColumn
                    )
            );
        }
        
        foreach($columnElements as $element)
        {
            $elements->add(
                $this->columns[$i] ?? DisciteHtml::Th()
                    ->datas(['column-index' => (string)($i + 1)])
                    ->add(
                        is_null($element) && isset($this->defaultEmptyColumn) ? clone $this->defaultEmptyColumn : $element
                    )
            );
        }

        if($this->hasActions)
        {
            $elements->add(
                DisciteHtml::Th()
                    ->classes(['discite-table-head-row-actions'])
                    ->datas(['column-index' => (string)($i + 1)])
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
}

?>