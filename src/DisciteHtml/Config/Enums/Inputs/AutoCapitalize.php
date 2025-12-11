<?php

namespace DisciteHtml\Config\Enums\Inputs;

enum AutoCapitalize : string
{
    case OFF = 'off';
    
    case NONE = 'none';
    
    case SENTENCES = 'sentences';
    
    case ON = 'on';
    
    case WORDS = 'words';

    case CHARACTERS = 'characters';

    case UNSET = '';
}

?>