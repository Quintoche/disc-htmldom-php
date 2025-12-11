<?php

namespace DisciteHtml\Config\Enums\Inputs;

enum InputMode : int
{
    case NONE = 'none';
    
    case TEXT = 'text';
    
    case DECIMAL = 'decimal';
    
    case NUMERIC = 'numeric';
    
    case TEL = 'tel';

    case URL = 'url';

    case SEARCH = 'search';

    case UNSET = '';
}

?>