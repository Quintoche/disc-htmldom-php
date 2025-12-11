<?php

namespace DisciteHtml\Config\Traits;

use DisciteHtml\Config\Enums\ElementType;
use DisciteHtml\Config\Enums\TagType;
use DisciteHtml\Core\AppConfig;

trait Tags
{
    /**
     * The HTML tag name.
     *
     * @var string
     */
    protected string $tag;

    public function getOpeningTag(): string
    {
        return $this->createTag(AppConfig::TAG_OPENING);
    }

    public function getClosingTag(): string
    {
        return $this->createTag(AppConfig::TAG_CLOSING);
    }

    private function createTag(TagType $tagType = TagType::OPENING) : string
    {
        return match($this->type)
        {
            ElementType::PAIRED_ELEMENT => $this->createPairedTag($tagType),
            ElementType::VOIDED_ELEMENT => $this->createVoidTag($tagType),
            TagType::OPENING => '',
            TagType::CLOSING => '',
            default => '',
        };
        return '<'.($tagType == TagType::CLOSING ? '/' : '').$this->tag.($tagType == TagType::OPENING ? ' {{DEFINITIONS}} ' : '').'>';
    }

    private function createVoidTag(TagType $tagType) : string
    {
        return match($tagType)
        {
            TagType::OPENING => '<' . $this->tag . ' ' . $this->renderInner() . ' ',
            TagType::CLOSING => '/>',
            default => '',
        };
    }
    private function createPairedTag(TagType $tagType) : string
    {
        return match($tagType)
        {
            TagType::OPENING => '<' . $this->tag . ' ' . $this->renderInner() . ' >',
            TagType::CLOSING => '</' . $this->tag . '>',
            default => '',
        };
    }
}

?>