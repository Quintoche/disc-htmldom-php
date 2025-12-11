<?php

namespace DisciteHtml\Elements\Paired;

use DisciteHtml\Config\Classes\PairedClass;
use DisciteHtml\Config\Traits\ForLabel;

/**
 * Class Label
 *
 * Represents an HTML anchor (<label>) element.
 * 
 * @package DisciteHtml\Elements\Paired
 */
final class Label extends PairedClass
{
    use ForLabel;
    
    protected string $tag = 'label';
}

?>