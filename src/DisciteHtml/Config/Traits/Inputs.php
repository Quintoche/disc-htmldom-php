<?php

namespace DisciteHtml\Config\Traits;

use DateTime;
use DisciteHtml\Config\Enums\Inputs\AcceptedType;
use DisciteHtml\Config\Enums\Inputs\AutoCapitalize;
use DisciteHtml\Config\Enums\Inputs\AutoCompleted;
use DisciteHtml\Config\Enums\Inputs\InputMode;
use DisciteHtml\Config\Enums\Inputs\InputPatterns;
use DisciteHtml\Config\Enums\Inputs\InputType;
use DisciteHtml\Config\Utils\SecurityUtils;

trait Inputs
{
    protected InputType $inputType;
    
    /**
     * Accepted files in input type file.
     *
     * @var array<AcceptedType>
     */
    protected array $accepted;

    protected AutoCompleted $autoCompleted;

    protected AutoCapitalize $autoCapitalize;

    protected InputPatterns $pattern;

    protected InputMode $mode;

    protected string $name;

    protected string $placeholder;
    
    protected mixed $value;

    protected bool $disabled;

    protected bool $checked;

    protected DateTime|int $min;

    protected DateTime|int $max;

    protected int $minLength;

    protected int $maxLength;


    /**
     * Manage Type of HTML element.
     * 
     * If parameter isn't provided, Type will be returned.
     * However, if you provide Type, function will update Type and return object. 
     *
     * @param ?InputType $inputType Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return InputType|null The Type of the element if no param provided.
     */
    public function type(?InputType $inputType = null) : static|InputType|null
    {
        $obj = $this->isPreset();

        if(is_null($inputType))
        {
            return $obj->inputType;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->inputType = $inputType;
            }
            return $obj;
        }
    }

    /**
     * Manage AutoCompleted of HTML element.
     * 
     * If parameter isn't provided, AutoCompleted will be returned.
     * However, if you provide AutoCompleted, function will update AutoCompleted and return object. 
     *
     * @param ?AutoCompleted $autoCompleted Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return AutoCompleted The AutoCompleted of the element if no param provided.
     */
    public function autoCompleted(?AutoCompleted $autoCompleted = null) : static|AutoCompleted
    {
        $obj = $this->isPreset();

        if(is_null($autoCompleted))
        {
            return $obj->autoCompleted;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->autoCompleted = $autoCompleted;
            }
            return $obj;
        }
    }

    /**
     * Manage AutoCapitalize of HTML element.
     * 
     * If parameter isn't provided, AutoCapitalize will be returned.
     * However, if you provide AutoCapitalize, function will update AutoCapitalize and return object. 
     *
     * @param ?AutoCapitalize $autoCapitalize Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return AutoCapitalize The AutoCapitalize of the element if no param provided.
     */
    public function autoCapitalize(?AutoCapitalize $autoCapitalize = null) : static|AutoCapitalize
    {
        $obj = $this->isPreset();

        if(is_null($autoCapitalize))
        {
            return $obj->autoCapitalize;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->autoCapitalize = $autoCapitalize;
            }
            return $obj;
        }
    }

    /**
     * Manage Pattern of HTML element.
     * 
     * If parameter isn't provided, Pattern will be returned.
     * However, if you provide Pattern, function will update Pattern and return object. 
     *
     * @param ?InputPatterns $pattern Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return InputPatterns The Pattern of the element if no param provided.
     */
    public function pattern(?InputPatterns $pattern = null) : static|InputPatterns
    {
        $obj = $this->isPreset();

        if(is_null($pattern))
        {
            return $obj->pattern;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->pattern = $pattern;
            }
            return $obj;
        }
    }

    /**
     * Manage Mode of HTML element.
     * 
     * If parameter isn't provided, Mode will be returned.
     * However, if you provide Mode, function will update Mode and return object. 
     *
     * @param ?InputMode $mode Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return InputMode The Mode of the element if no param provided.
     */
    public function mode(?InputMode $mode = null) : static|InputMode
    {
        $obj = $this->isPreset();

        if(is_null($mode))
        {
            return $obj->mode;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->mode = $mode;
            }
            return $obj;
        }
    }

    /**
     * Manage Name of HTML element.
     * 
     * If parameter isn't provided, Name will be returned.
     * However, if you provide Name, function will update Name and return object. 
     *
     * @param ?string $name Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return string|null The Name of the element if no param provided.
     */
    public function name(?string $name = null) : static|string|null
    {
        $obj = $this->isPreset();

        if(is_null($name))
        {
            return $obj->name;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->name = SecurityUtils::escape($name);
            }
            return $obj;
        }
    }

    /**
     * Manage Placeholder of HTML element.
     * 
     * If parameter isn't provided, Placeholder will be returned.
     * However, if you provide Placeholder, function will update Placeholder and return object. 
     *
     * @param ?string $placeholder Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return string|null The Placeholder of the element if no param provided.
     */
    public function placeholder(?string $placeholder = null) : static|string|null
    {
        $obj = $this->isPreset();

        if(is_null($placeholder))
        {
            return $obj->placeholder;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->placeholder = SecurityUtils::escape($placeholder);
            }
            return $obj;
        }
    }

    /**
     * Manage Disabled state of HTML element.
     * 
     * If parameter isn't provided, Disabled state will be returned.
     * However, if you provide Disabled state, function will update Disabled state and return object. 
     *
     * @param ?bool $disabled Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return bool The Disabled state of the element if no param provided.
     */
    public function disabled(?bool $disabled = null) : static|bool
    {
        $obj = $this->isPreset();

        if(is_null($disabled))
        {
            return $obj->disabled;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->disabled = $disabled;
            }
            return $obj;
        }
    }

    /**
     * Manage Checked state of HTML element.
     * 
     * If parameter isn't provided, Checked state will be returned.
     * However, if you provide Checked state, function will update Checked state and return object. 
     *
     * @param ?bool $checked Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return bool The Checked state of the element if no param provided.
     */
    public function checked(?bool $checked = null) : static|bool
    {
        $obj = $this->isPreset();

        if(is_null($checked))
        {
            return $obj->checked;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->checked = $checked;
            }
            return $obj;
        }
    }

    /**
     * Manage Accepted types of HTML element.
     * 
     * If parameter isn't provided, Accepted types will be returned.
     * However, if you provide Accepted types, function will update Accepted types and return object. 
     *
     * @param ?AcceptedType ...$accepted Provide param will update object
     * 
     * @return static The element if a param is provided to update him.
     * @return array The Accepted types of the element if no param provided.
     */
    public function accept(?AcceptedType ...$accepted) : static|array
    {
        $obj = $this->isPreset();

        if(is_null($accepted) || empty($accepted))
        {
            return $obj->accepted;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                foreach($accepted as $accept)
                {
                    $obj->accepted[] = $accept;
                }
            }
            return $obj;
        }
    }

    public function min(DateTime|int|null $minValue = null) : static|DateTime|int
    {
        $obj = $this->isPreset();

        if(is_null($minValue))
        {
            return $obj->min;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->min = match(true) {
                    $minValue instanceof DateTime => $minValue->format('Y-m-d'),
                    default => (int) $minValue,
                };
            }
            return $obj;
        }
    }

    public function max(DateTime|int|null $maxValue = null) : static|DateTime|int
    {
        $obj = $this->isPreset();

        if(is_null($maxValue))
        {
            return $obj->max;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->max = match(true) {
                    $maxValue instanceof DateTime => $maxValue->format('Y-m-d'),
                    default => (int) $maxValue,
                };
            }
            return $obj;
        }
    }

    public function value(mixed $value = null) : mixed
    {
        $obj = $this->isPreset();

        if(is_null($value))
        {
            return $obj->value;
        }
        else
        {
            if(SecurityUtils::allowAttribute($this, __FUNCTION__))
            {
                $obj->value = $value;
                
                switch($obj->inputType)
                {
                    case InputType::RADIO :
                    case InputType::CHECKBOX :
                        $obj->checked((bool) $value); 
                        break;
                }
            }
                        
            return $obj;
        }
    }
}

?>