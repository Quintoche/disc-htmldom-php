<?php

namespace DisciteHtml\Core;

use DisciteHtml\Config\Enums\ElementType;
use DisciteHtml\Config\Enums\TagType;

class AppConfig
{

    const TAG_OPENING = TagType::OPENING;

    const TAG_CLOSING = TagType::CLOSING;

    
    const ELEMENT_PAIRED = ElementType::PAIRED_ELEMENT;

    const ELEMENT_VOIDED = ElementType::VOIDED_ELEMENT;

    const ELEMENT_INPUTS = ElementType::INPUTS_ELEMENT;

    const ELEMENT_PRESET = ElementType::PRESET_ELEMENT;

    
    const TEXT_DATA = 'data-';

    const TEXT_ARIA = 'aria-';
}

?>