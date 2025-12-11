<?php

namespace DisciteHtml\Elements\Paired;

use DisciteHtml\Config\Classes\PairedClass;
use DisciteHtml\Config\Enums\Links\LinkRel;
use DisciteHtml\Config\Utils\SecurityUtils;
use DisciteHtml\DisciteHtml;

/**
 * Class head
 *
 * Represents an HTML anchor (<head>) element.
 * 
 * @package DisciteHtml\Elements\Paired
 */
final class Head extends PairedClass
{
    protected string $tag = 'head';

    public function __construct(string $title = '')
    {
        $this->add(
            DisciteHtml::title()->add($title)
        );
    }

    public function base(string $href) : self
    {
        $this->add(
            DisciteHtml::Base()
                ->href($href)
        );
        
        return $this;
    }

    public function title(?string $title = null) : static
    {
        $this->add(
            DisciteHtml::title()
                ->add($title ?? '')
        );

        return $this;
    }

    public function meta(string $name, string $content) : self
    {
        $this->add(
            DisciteHtml::meta()
                ->attr('name', $name)
                ->attr('content', $content)
        );
        
        return $this;
    }

    public function charset(string $content) : self
    {
        $this->add(
            DisciteHtml::meta()
                ->attr('charset', $content)
        );
        
        return $this;
    }

    public function link(LinkRel $rel, string $href, bool $defer = false, bool $crossOrigin = false, ?array $attr = null) : self
    {
        $linkElement = DisciteHtml::Link()
            ->attr('rel', $rel->value)
            ->href($href);
        
        if($defer)
        {
            $linkElement->selfAttr('defer');
        }

        if($crossOrigin)
        {
            $linkElement->selfAttr('crossorigin');
        }

        if(!is_null($attr))
        {
            foreach($attr as $key => $value)
            {
                $linkElement->attr($key, $value);
            }
        }

        $this->add($linkElement);
        
        return $this;
    }

    public function script(string $src, bool $defer = false) : self
    {
        $linkElement = DisciteHtml::script()
            ->src($src);

        if($defer)
        {
            $linkElement->selfAttr('defer');
        }

        $this->add($linkElement);

        return $this;
    }
}

?>