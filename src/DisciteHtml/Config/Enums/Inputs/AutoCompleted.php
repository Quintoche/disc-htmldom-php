<?php

namespace DisciteHtml\Config\Enums\Inputs;

enum AutoCompleted : string
{
    case TEL = 'tel';
    
    case EMAIL = 'email';
    
    case NAME = 'name';
    
    case GIVEN_NAME = 'given-name';
    
    case FIRST_NAME = 'first-name';

    case FAMILY_NAME = 'family-name';

    case LAST_NAME = 'last-name';

    case NICKNAME = 'nickname';

    case NEW_PASSWORD = 'new-password';

    case CURRENT_PASSWORD = 'current-password';

    case ONE_TIME_CODE = 'one-time-code';

    case ADDRESS_LINE1 = 'address-line1';
    
    case ADDRESS_LINE2 = 'address-line2';
    
    case ADDRESS_LINE3 = 'address-line3';

    case COUNTRY_NAME = 'country-name';

    case COUNTRY = 'country';

    case POSTAL_CODE = 'postal-code';

    case CC_NAME = 'cc-name';

    case CC_NUMBER = 'cc-number';

    case CC_EXP = 'cc-exp';

    case CC_CSC = 'cc-csc';

    case CC_TYPE = 'cc-type';

    case BDAY = 'bday';

    case UNSET = '';
}

?>