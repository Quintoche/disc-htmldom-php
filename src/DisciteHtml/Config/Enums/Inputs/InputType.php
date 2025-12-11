<?php

namespace DisciteHtml\Config\Enums\Inputs;

enum InputType : string
{
    case TEXT = 'text';
    
    case PASSWORD = 'password';
    
    case URL = 'url';
    
    case TEL = 'tel';
    
    case EMAIL = 'email';

    case SEARCH = 'search';

    case NUMBER = 'number';

    case DATE = 'date';

    case DATETIME_LOCAL = 'datetime-local';

    case MONTH = 'month';

    case WEEK = 'week';

    case CHECKBOX = 'checkbox';
    
    case RADIO = 'radio';

    case RANGE = 'range';

    case SUBMIT = 'submit';

    case BUTTON = 'button';

    case FILE = 'file';

    case COLOR = 'color';

    case IMAGE = 'image';
}

?>