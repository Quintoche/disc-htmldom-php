<?php

namespace DisciteHtml\Config\Enums\Inputs;

enum InputPatterns : string
{
    case POSTAL_CODE = '\\d{5}';
    
    case DATE = '\\d{2}/\\d{2}/\\d{4}';
    
    case AMOUNT = '\\d+([.,]\\d{1,2})?$';

    case UNSET = '';
}

?>