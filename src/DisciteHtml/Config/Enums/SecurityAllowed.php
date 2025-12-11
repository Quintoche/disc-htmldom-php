<?php

namespace DisciteHtml\Config\Enums;

use DisciteHtml\Elements\Paired\A;
use DisciteHtml\Elements\Paired\Label;
use DisciteHtml\Elements\Paired\Link;
use DisciteHtml\Elements\Paired\Base;
use DisciteHtml\Elements\Paired\Script;
use DisciteHtml\Elements\Voided\Img;
use DisciteHtml\Elements\Voided\Input;

class SecurityAllowed
{
    const ACCEPT = [
        Input::class,
    ];
    
    const TYPE = [
        Input::class,
        Link::class,
    ];

    CONST AUTOCOMPLETED = [
        Input::class,
    ];

    CONST AUTOCAPITALIZE = [
        Input::class,
    ];

    CONST PATTERN = [
        Input::class,
    ];

    CONST MODE = [
        Input::class,
    ];

    CONST PLACEHOLDER = [
        Input::class,
    ];

    CONST VALUE = [
        Input::class,
    ];

    CONST DISABLED = [
        Input::class,
    ];

    CONST CHECKED = [
        Input::class,
    ];

    CONST MIN = [
        Input::class,
    ];

    CONST MAX = [
        Input::class,
    ];

    CONST MINLENGTH = [
        Input::class,
    ];

    CONST MAXLENGTH = [
        Input::class,
    ];

    CONST HREF = [
        A::class,
        Link::class,
        Base::class,
    ];

    CONST FOR = [
        Label::class
    ];

    CONST SRC = [
        Img::class,
        Script::class,
    ];
}

?>