<?php

namespace DisciteHtml\Config\Classes;

use DisciteHtml\Config\Traits\Inputs;

/**
 * Class InputClass
 *
 * An abstract class representing input HTML elements with opening and closing tags.
 *
 * @package DisciteHtml\Config\Classes
 */
abstract class InputClass extends VoidedClass
{
  use Inputs;   
}

?>