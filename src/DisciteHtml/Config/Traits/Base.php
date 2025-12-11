<?php

namespace DisciteHtml\Config\Traits;

trait Base
{
    protected array $innerOutput = [];

    protected array $idOutput = [];

    protected array $classesOutput = [];

    protected array $acceptedOutput = [];

    protected array $stylesOutput = [];

    protected array $attributesOutput = [];

    protected array $childrenOutput = [];

    protected bool $preset = false;

    public function toHtml() : string
    {
        return $this->renderElement();
    }

    public function preset(?bool $preset = null) : static|bool
    {
        if(is_null($preset))
        {
            return $this->preset;
        }
        else
        {
            $this->preset = $preset;
            return $this;
        }
    }

    public function tag(?string $tag = null) : static|string
    {
        if(is_null($tag))
        {
            return $this->tag;
        }
        else
        {
            $this->tag = $tag;
            return $this;
        }
    }

    protected function isPreset() : static
    {
        return ($this->preset) ? clone $this : $this;
    }

    public function __clone() : void
    {
        $this->preset(false);
    }

    protected function clearOutputs() : void
    {
        $this->innerOutput = [];

        $this->idOutput = [];
        $this->classesOutput = [];
        $this->acceptedOutput = [];
        $this->stylesOutput = [];
        $this->attributesOutput = [];
        $this->childrenOutput = [];
    }


}

?>