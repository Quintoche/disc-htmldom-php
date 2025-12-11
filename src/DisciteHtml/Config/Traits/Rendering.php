<?php

namespace DisciteHtml\Config\Traits;

use DisciteHtml\Core\AppConfig;

trait Rendering
{
    /**
     * Main fucntion to render element
     * 
     * Renders the complete HTML element as a string.
     * 
     * @return string The rendered HTML element.
     */
    protected function renderElement() : string
    {
        $tags = $this->renderTags();

        return $tags[0] . $this->renderChildren() . $tags[1];
    }

    /**
     * Renderers for tags
     * 
     * Renders the opening and closing tags for the HTML element.
     * 
     * @return array An array containing the opening and closing tags.
     */
    protected function renderTags() : array
    {
        return [
            $this->getOpeningTag(),
            $this->getClosingTag(),
        ];
    }

    /**
     * Renderers for children
     * 
     * Renders the children for the HTML element.
     * 
     * @return string The rendered children.
     */
    protected function renderChildren() : string
    {
        foreach($this->childs() as $child)
        {
            $this->childrenOutput[] = (gettype($child) != 'object') ? $child : $child->toHtml();
        }

        return implode(' ', $this->childrenOutput);
    }

    /**
     * Renderers for inner
     * 
     * Renders the inner attributes for the HTML element.
     * 
     * @return string The rendered inner attributes.
     */
    protected function renderInner() : string
    {
        $this->clearOutputs();

        $this->renderBase();

        $this->renderInputs();
        $this->renderLinks();
        $this->renderFor();
        $this->renderAttributes();

        $this->innerOutput = array_filter($this->innerOutput, fn($value) => !is_null($value) && $value !== '');

        return implode(' ', $this->innerOutput);
    }

    /**
     * Renderers for base
     * 
     * Renders the base attributes for the HTML element.
     */
    protected function renderBase() : void
    {
        $this->innerOutput[] = $this->renderId();
        $this->innerOutput[] = $this->renderTitle();
    }

    /**
     * Renderers for inputs
     * 
     * Renders the input-related attributes for the HTML element.
     */
    protected function renderInputs() : void
    {
        $this->innerOutput[] = $this->renderType();
        $this->innerOutput[] = $this->renderPlaceholder();
        $this->innerOutput[] = $this->renderValue();
        $this->innerOutput[] = $this->renderDisabled();
        $this->innerOutput[] = $this->renderChecked();
        $this->innerOutput[] = $this->renderMin();
        $this->innerOutput[] = $this->renderMax();
        $this->innerOutput[] = $this->renderMinLength();
        $this->innerOutput[] = $this->renderMaxLength();
        $this->innerOutput[] = $this->renderAutoCompleted();
        $this->innerOutput[] = $this->renderAutoCapitalize();
        $this->innerOutput[] = $this->renderPattern();
        $this->innerOutput[] = $this->renderMode();
        $this->innerOutput[] = $this->renderAccepted();
    }

    /**
     * Renderers for links
     * 
     * Renders the link-related attributes for the HTML element.
     */
    protected function renderLinks() : void
    {
        $this->innerOutput[] = $this->renderHref();
    }

    /**
     * Renderers for labels
     * 
     * Renders the label-related attributes for the HTML element.
     */
    protected function renderLabels() : void
    {
        $this->innerOutput[] = $this->renderFor();
    }

    /**
     * Renderers for attributes
     * 
     * Renders the attributes for the HTML element.
     */
    protected function renderAttributes() : void
    {
        $this->innerOutput[] = $this->renderClasses();
        $this->innerOutput[] = $this->renderStyles();
        $this->innerOutput[] = $this->renderAttrs();
    }

    /**
     * Renderers for id
     * 
     * Renders the id attribute for the HTML element.
     * 
     * @return string The rendered id attribute.
     */
    protected function renderId() : string
    {
        return (isset($this->id)) ? 'id="' . $this->id . '"' : '';
    }

    /**
     * Renderers for type
     * 
     * Renders the type attribute for the HTML element.
     * 
     * @return string The rendered type attribute.
     */
    protected function renderType() : string
    {
        return (isset($this->inputType)) ? 'type="' . $this->inputType->value . '"' : '';
    }

    /**
     * Renderers for href
     * 
     * Renders the href attribute for the HTML element.
     * 
     * @return string The rendered href attribute.
     */
    protected function renderHref() : string
    {
        return (isset($this->href)) ? 'href="' . $this->href . '"' : '';
    }

    /**
     * Renderers for title
     * 
     * Renders the title attribute for the HTML element.
     * 
     * @return string The rendered title attribute.
     */
    protected function renderTitle() : string
    {
        return (isset($this->title)) ? 'title="' . $this->title . '"' : '';
    }

    /**
     * Renderers for placeholder
     * 
     * Renders the placeholder attribute for the HTML element.
     * 
     * @return string The rendered placeholder attribute.
     */
    protected function renderPlaceholder() : string
    {
        return (isset($this->placeholder)) ? 'placeholder="' . $this->placeholder . '"' : '';
    }

    /**
     * Renderers for value
     * 
     * Renders the value attribute for the HTML element.
     * 
     * @return string The rendered value attribute.
     */
    protected function renderValue() : string
    {
        return (isset($this->value)) ? 'value="' . $this->value . '"' : '';
    }

    /**
     * Renderers for for
     * 
     * Renders the for attribute for the HTML element.
     * 
     * @return string The rendered for attribute.
     */
    protected function renderFor() : string
    {
        return (isset($this->for)) ? 'for="' . $this->for . '"' : '';
    }

    /**
     * Renderers for disabled
     * 
     * Renders the disabled attribute for the HTML element.
     * 
     * @return string The rendered disabled attribute.
     */
    protected function renderDisabled() : string
    {
        return (isset($this->disabled)) ? 'disabled="' . $this->disabled . '"' : '';
    }

    /**
     * Renderers for checked
     * 
     * Renders the checked attribute for the HTML element.
     * 
     * @return string The rendered checked attribute.
     */
    protected function renderChecked() : string
    {
        return (isset($this->checked)) ? 'checked="' . $this->checked . '"' : '';
    }

    /**
     * Renderers for min
     * 
     * Renders the min attribute for the HTML element.
     * 
     * @return string The rendered min attribute.
     */
    protected function renderMin() : string
    {
        return (isset($this->min)) ? 'min="' . $this->min . '"' : '';
    }

    /**
     * Renderers for max
     * 
     * Renders the max attribute for the HTML element.
     * 
     * @return string The rendered max attribute.
     */
    protected function renderMax() : string
    {
        return (isset($this->max)) ? 'max="' . $this->max . '"' : '';
    }

    /**
     * Renderers for minLength
     * 
     * Renders the minlength attribute for the HTML element.
     * 
     * @return string The rendered minlength attribute.
     */
    protected function renderMinLength() : string
    {
        return (isset($this->minLength)) ? 'minlength="' . $this->minLength . '"' : '';
    }

    /**
     * Renderers for maxLength
     * 
     * Renders the maxlength attribute for the HTML element.
     * 
     * @return string The rendered maxlength attribute.
     */
    protected function renderMaxLength() : string
    {
        return (isset($this->maxLength)) ? 'maxlength="' . $this->maxLength . '"' : '';
    }

    /**
     * Renderers for autoCompleted
     * 
     * Renders the autocomplete attribute for the HTML element.
     * 
     * @return string The rendered autocomplete attribute.
     */
    protected function renderAutoCompleted() : string
    {
        return (isset($this->autoCompleted)) ? 'autocomplete="' . $this->autoCompleted->value . '"' : '';
    }

    /**
     * Renderers for autoCapitalize
     * 
     * Renders the autocapitalize attribute for the HTML element.
     * 
     * @return string The rendered autocapitalize attribute.
     */
    protected function renderAutoCapitalize() : string
    {
        return (isset($this->autoCapitalize)) ? 'autocapitalize="' . $this->autoCapitalize->value . '"' : '';
    }

    /**
     * Renderers for pattern
     * 
     * Renders the pattern attribute for the HTML element.
     * 
     * @return string The rendered pattern attribute.
     */
    protected function renderPattern() : string
    {
        return (isset($this->pattern)) ? 'pattern="' . $this->pattern->value . '"' : '';
    }

    /**
     * Renderers for mode
     * 
     * Renders the inputmode attribute for the HTML element.
     * 
     * @return string The rendered inputmode attribute.
     */
    protected function renderMode() : string
    {
        return (isset($this->mode)) ? 'inputmode="' . $this->mode->value . '"' : '';
    }

    /**
     * Renderers for class
     * 
     * Renders the class attribute for the HTML element.
     * 
     * @return string The rendered class attribute.
     */
    protected function renderClasses() : string
    {
        return (isset($this->class) && $this->hasClasses()) ? 'class="' . implode(' ',$this->classes()) . '"' : '';
    }

    /**
     * Renderers for accept
     * 
     * Renders the accept attribute for the HTML element.
     * 
     * @return string The rendered accept attribute.
     */
    protected function renderAccepted() : string
    {
        if(isset($this->accepted))
        {
            foreach($this->accept() as $v)
            {
                $this->acceptedOutput[] =  $v->value;
            }
        }

        return (sizeof($this->acceptedOutput) > 0) ? 'accept="' . implode(',',$this->acceptedOutput) . '"' : '';
    }

    /**
     * Renderers for styles
     * 
     * Renders the style attribute for the HTML element.
     * 
     * @return string The rendered style attribute.
     */
    protected function renderStyles() : string
    {
        if(isset($this->styles) && $this->hasStyles())
        {
            foreach($this->styles() as $k => $v)
            {
                $this->stylesOutput[] =  $k . ': ' . $v;
            }
        }

        return (sizeof($this->stylesOutput) == 0) ? '' : 'style="' . implode('; ', $this->stylesOutput) . '"';
    }
    
    /**
     * Renderers for attrs
     * 
     * Renders the attr attributes for the HTML element.
     * 
     * @return string The rendered attr attributes.
     */
    protected function renderAttrs() : string
    {
        if(isset($this->data) && $this->hasDatas())
        {
            foreach($this->datas() as $k => $v)
            {
                $this->attributesOutput[] = (str_contains($k, AppConfig::TEXT_DATA) ? '' : AppConfig::TEXT_DATA) . $k . '="' . $v . '"';
            }
        }

        if(isset($this->aria) && $this->hasArias())
        {
            foreach($this->arias() as $k => $v)
            {
                $this->attributesOutput[] = (str_contains($k, AppConfig::TEXT_ARIA) ? '' : AppConfig::TEXT_ARIA) . $k . '="' . $v . '"';
            }
        }
        
        if(isset($this->attr) && $this->hasAttrs())
        {
            foreach($this->attrs() as $k => $v)
            {
                $this->attributesOutput[] =  $k . '="' . $v . '"';
            }
        }

        if(isset($this->selfAttr) && $this->hasSelfAttrs())
        {
            foreach($this->selfAttr() as $v)
            {
                $this->attributesOutput[] =  $v;
            }
        }

        return implode(' ', $this->attributesOutput);
    }
}

?>