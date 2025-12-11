<?php

namespace DisciteHtml\Config\Enums;

enum ElementType : int
{
    case PAIRED_ELEMENT = 10;

    case VOIDED_ELEMENT = 20;
    
    case INPUTS_ELEMENT = 30;
    
    case PRESET_ELEMENT = 99;
}

?>