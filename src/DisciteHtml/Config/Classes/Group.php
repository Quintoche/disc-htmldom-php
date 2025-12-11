<?php

namespace DisciteHtml\Config\Classes;

use DisciteHtml\Config\Enums\ElementType;
use DisciteHtml\Config\Traits\Arias;
use DisciteHtml\Config\Traits\Attr;
use DisciteHtml\Config\Traits\Base;
use DisciteHtml\Config\Traits\Childs;
use DisciteHtml\Config\Traits\Classes;
use DisciteHtml\Config\Traits\Data;
use DisciteHtml\Config\Traits\ForLabel;
use DisciteHtml\Config\Traits\Href;
use DisciteHtml\Config\Traits\Id;
use DisciteHtml\Config\Traits\Inputs;
use DisciteHtml\Config\Traits\Rendering;
use DisciteHtml\Config\Traits\SelfAttr;
use DisciteHtml\Config\Traits\Styles;
use DisciteHtml\Config\Traits\Tags;

abstract class Group
{
    use Base;
    
    use Id;
    use Classes;
    use Childs;
    use Attr;
    use SelfAttr;
    use Arias;
    use Data;
    use Styles;
    use Inputs;
    use ForLabel;
    use Href;
    
    use Rendering;
    use Tags;

    protected ElementType $type;
}

?>