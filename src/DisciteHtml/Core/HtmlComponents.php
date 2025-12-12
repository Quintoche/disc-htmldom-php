<?php

namespace DisciteHtml\Core;

use DisciteHtml\Config\Classes\Element;
use DisciteHtml\Config\Classes\InputClass;
use DisciteHtml\Config\Classes\PairedClass;
use DisciteHtml\Config\Classes\VoidedClass;
use DisciteHtml\Config\Enums\ElementType;
use DisciteHtml\Elements\Custom;
use DisciteHtml\Elements\Paired\Button;
use DisciteHtml\Elements\Paired\_Paragraph;
use DisciteHtml\Elements\Paired\A;
use DisciteHtml\Elements\Paired\Article;
use DisciteHtml\Elements\Paired\Aside;
use DisciteHtml\Elements\Paired\B;
use DisciteHtml\Elements\Paired\Div;
use DisciteHtml\Elements\Paired\Em;
use DisciteHtml\Elements\Paired\Figure;
use DisciteHtml\Elements\Paired\Footer;
use DisciteHtml\Elements\Paired\Form;
use DisciteHtml\Elements\Paired\H1;
use DisciteHtml\Elements\Paired\H2;
use DisciteHtml\Elements\Paired\H3;
use DisciteHtml\Elements\Paired\H4;
use DisciteHtml\Elements\Paired\H5;
use DisciteHtml\Elements\Paired\H6;
use DisciteHtml\Elements\Paired\Head;
use DisciteHtml\Elements\Paired\Header;
use DisciteHtml\Elements\Paired\Label;
use DisciteHtml\Elements\Paired\Li;
use DisciteHtml\Elements\Paired\Main;
use DisciteHtml\Elements\Paired\Nav;
use DisciteHtml\Elements\Paired\Ol;
use DisciteHtml\Elements\Paired\Option;
use DisciteHtml\Elements\Paired\P;
use DisciteHtml\Elements\Paired\Section;
use DisciteHtml\Elements\Paired\Select;
use DisciteHtml\Elements\Paired\Span;
use DisciteHtml\Elements\Paired\Strong;
use DisciteHtml\Elements\Paired\Table;
use DisciteHtml\Elements\Paired\Tbody;
use DisciteHtml\Elements\Paired\Td;
use DisciteHtml\Elements\Paired\Textarea;
use DisciteHtml\Elements\Paired\Tfoot;
use DisciteHtml\Elements\Paired\Th;
use DisciteHtml\Elements\Paired\Thead;
use DisciteHtml\Elements\Paired\Tr;
use DisciteHtml\Elements\Paired\Ul;
use DisciteHtml\Elements\Paired\Base;
use DisciteHtml\Elements\Paired\G;
use DisciteHtml\Elements\Paired\Link;
use DisciteHtml\Elements\Paired\Path;
use DisciteHtml\Elements\Paired\Script;
use DisciteHtml\Elements\Paired\Svg;
use DisciteHtml\Elements\Paired\Title;
use DisciteHtml\Elements\Voided\Br;
use DisciteHtml\Elements\Voided\Hr;
use DisciteHtml\Elements\Voided\Img;
use DisciteHtml\Elements\Voided\Input;
use DisciteHtml\Elements\Voided\Meta;

class HtmlComponents
{


    /**
     * Custome element
     * 
     * Creates and returns a new instance of the P HTML element.
     * 
     * @return custom
     */
    public static function custom(string $tag, ElementType $type = ElementType::PAIRED_ELEMENT) : custom
    {
        return new Custom($tag, $type);
    }


    /**
     * Paragraph element
     * 
     * Creates and returns a new instance of the P HTML element.
     * 
     * @return _paragraph
     */
    public static function _paragraph() : _paragraph
    {
        return new _Paragraph();
    }


    /**
     * Link element
     * 
     * Creates and returns a new instance of the A HTML element.
     * 
     * @return A
     */
    public static function A() : A
    {
        return new A();
    }


    /**
     * Link element
     * 
     * Creates and returns a new instance of the Link HTML element.
     * 
     * @return Link
     */
    public static function Link() : Link
    {
        return new Link();
    }


    /**
     * Article element
     * 
     * Creates and returns a new instance of the Article HTML element.
     * 
     * @return Article
     */
    public static function Article() : Article
    {
        return new Article();
    }


    /**
     * Aside element
     * 
     * Creates and returns a new instance of the Aside HTML element.
     * 
     * @return Aside
     */
    public static function Aside() : Aside
    {
        return new Aside();
    }


    /**
     * Bold element
     * 
     * Creates and returns a new instance of the B (bold) HTML element.
     * 
     * @return B
     */
    public static function B() : B
    {
        return new B();
    }


    /**
     * Button element
     * 
     * Creates and returns a new instance of the Button HTML element.
     * 
     * @return Button
     */
    public static function Button() : Button
    {
        return new Button();
    }


    /**
     * Div element
     * 
     * Creates and returns a new instance of the Div HTML element.
     * 
     * @return Div
     */
    public static function Div() : Div
    {
        return new Div();
    }


    /**
     * Em element
     * 
     * Creates and returns a new instance of the Em HTML element.
     * 
     * @return Em
     */
    public static function Em() : Em
    {
        return new Em();
    }


    /**
     * Figure element
     * 
     * Creates and returns a new instance of the Figure HTML element.
     * 
     * @return Figure
     */
    public static function Figure() : Figure
    {
        return new Figure();
    }


    /**
     * Footer element
     * 
     * Creates and returns a new instance of the Footer HTML element.
     * 
     * @return Footer
     */
    public static function Footer() : Footer
    {
        return new Footer();
    }


    /**
     * Form element
     * 
     * Creates and returns a new instance of the Form HTML element.
     * 
     * @return Form
     */
    public static function Form() : Form
    {
        return new Form();
    }


    /**
     * G element
     * 
     * Creates and returns a new instance of the G HTML element.
     * 
     * @return G
     */
    public static function G() : G
    {
        return new G();
    }


    /**
     * H1 element
     * 
     * Creates and returns a new instance of the H1 HTML element.
     * 
     * @return H1
     */
    public static function H1() : H1
    {
        return new H1();
    }


    /**
     * H2 element
     * 
     * Creates and returns a new instance of the H2 HTML element.
     * 
     * @return H2
     */
    public static function H2() : H2
    {
        return new H2();
    }


    /**
     * H3 element
     * 
     * Creates and returns a new instance of the H3 HTML element.
     * 
     * @return H3
     */
    public static function H3() : H3
    {
        return new H3();
    }


    /**
     * H4 element
     * 
     * Creates and returns a new instance of the H4 HTML element.
     * 
     * @return H4
     */
    public static function H4() : H4
    {
        return new H4();
    }


    /**
     * H5 element
     * 
     * Creates and returns a new instance of the H5 HTML element.
     * 
     * @return H5
     */
    public static function H5() : H5
    {
        return new H5();
    }


    /**
     * H6 element
     * 
     * Creates and returns a new instance of the H6 HTML element.
     * 
     * @return H6
     */
    public static function H6() : H6
    {
        return new H6();
    }


    /**
     * Head element
     * 
     * Creates and returns a new instance of the Head HTML element.
     * 
     * @return Head
     */
    public static function Head() : Head
    {
        return new Head();
    }


    /**
     * Header element
     * 
     * Creates and returns a new instance of the Header HTML element.
     * 
     * @return Header
     */
    public static function Header() : Header
    {
        return new Header();
    }


    /**
     * Label element
     * 
     * Creates and returns a new instance of the Label HTML element.
     * 
     * @return Label
     */
    public static function Label() : Label
    {
        return new Label();
    }


    /**
     * Li element
     * 
     * Creates and returns a new instance of the Li HTML element.
     * 
     * @return Li
     */
    public static function Li() : Li
    {
        return new Li();
    }


    /**
     * Main element
     * 
     * Creates and returns a new instance of the Main HTML element.
     * 
     * @return Main
     */
    public static function Main() : Main
    {
        return new Main();
    }


    /**
     * Nav element
     * 
     * Creates and returns a new instance of the Nav HTML element.
     * 
     * @return Nav
     */
    public static function Nav() : Nav
    {
        return new Nav();
    }


    /**
     * Ol element
     * 
     * Creates and returns a new instance of the Ol HTML element.
     * 
     * @return Ol
     */
    public static function Ol() : Ol
    {
        return new Ol();
    }


    /**
     * Option element
     * 
     * Creates and returns a new instance of the Option HTML element.
     * 
     * @return Option
     */
    public static function Option() : Option
    {
        return new Option();
    }


    /**
     * P element
     * 
     * Creates and returns a new instance of the P HTML element.
     * 
     * @return P
     */
    public static function P() : P
    {
        return new P();
    }


    /**
     * Path element
     * 
     * Creates and returns a new instance of the Path HTML element.
     * 
     * @return Path
     */
    public static function Path() : Path
    {
        return new Path();
    }
    

    /**
     * Script element
     * 
     * Creates and returns a new instance of the Script HTML element.
     * 
     * @return Script
     */
    public static function Script() : Script
    {
        return new Script();
    }


    /**
     * Section element
     * 
     * Creates and returns a new instance of the Section HTML element.
     * 
     * @return Section
     */
    public static function Section() : Section
    {
        return new Section();
    }


    /**
     * Select element
     * 
     * Creates and returns a new instance of the Select HTML element.
     * 
     * @return Select
     */
    public static function Select() : Select
    {
        return new Select();
    }


    /**
     * Span element
     * 
     * Creates and returns a new instance of the Span HTML element.
     * 
     * @return Span
     */
    public static function Span() : Span
    {
        return new Span();
    }


    /**
     * Strong element
     * 
     * Creates and returns a new instance of the Strong HTML element.
     * 
     * @return Strong
     */
    public static function Strong() : Strong
    {
        return new Strong();
    }


    /**
     * Svg element
     * 
     * Creates and returns a new instance of the Svg HTML element.
     * 
     * @return Svg
     */
    public static function Svg() : Svg
    {
        return new Svg();
    }

    
    /**
     * Table element
     * 
     * Creates and returns a new instance of the Table HTML element. 
     * 
     * @return Table
     */
    public static function Table() : Table
    {
        return new Table();
    }


    /**
     * Tbody element
     * 
     * Creates and returns a new instance of the Tbody HTML element.
     * 
     * @return Tbody
     */
    public static function Tbody() : Tbody
    {
        return new Tbody();
    }


    /**
     * Td element
     * 
     * Creates and returns a new instance of the Td HTML element.
     * 
     * @return Td
     */
    public static function Td() : Td
    {
        return new Td();
    }


    /**
     * Textarea element
     * 
     * Creates and returns a new instance of the Textarea HTML element.
     * 
     * @return Textarea
     */
    public static function Textarea() : Textarea
    {
        return new Textarea();
    }


    /**
     * Tfoot element
     * 
     * Creates and returns a new instance of the Tfoot HTML element.
     * 
     * @return Tfoot
     */
    public static function Tfoot() : Tfoot
    {
        return new Tfoot();
    }


    /**
     * Th element
     * 
     * Creates and returns a new instance of the Th HTML element.
     * 
     * @return Th
     */
    public static function Th() : Th
    {
        return new Th();
    }


    /**
     * Thead element
     * 
     * Creates and returns a new instance of the Thead HTML element.
     * 
     * @return Thead
     */
    public static function Thead() : Thead
    {
        return new Thead();
    }

    
    /**
     * Title element
     * 
     * Creates and returns a new instance of the Title HTML element.
     * 
     * @return Title
     */
    public static function title() : Title
    {
        return new Title();
    }


    /**
     * Tr element
     * 
     * Creates and returns a new instance of the Tr HTML element.
     * 
     * @return Tr
     */
    public static function Tr() : Tr
    {
        return new Tr();
    }


    /**
     * Ul element
     * 
     * Creates and returns a new instance of the Ul HTML element.
     * 
     * @return Ul
     */
    public static function Ul() : Ul
    {
        return new Ul();
    }


    /**
     * Base element
     * 
     * Creates and returns a new instance of the Base HTML element.
     * 
     * @return Base
     */
    public static function Base() : Base
    {
        return new Base();
    }


    /**
     * Br element
     * 
     * Creates and returns a new instance of the Br HTML element.
     * 
     * @return Br
     */
    public static function Br() : Br
    {
        return new Br();
    }


    /**
     * Hr element
     * 
     * Creates and returns a new instance of the Hr HTML element.
     * 
     * @return Hr
     */
    public static function Hr() : Hr
    {
        return new Hr();
    }


    /**
     * Img element
     * 
     * Creates and returns a new instance of the Img HTML element.
     * 
     * @return Img
     */
    public static function Img() : Img
    {
        return new Img();
    }


    /**
     * Meta element
     * 
     * Creates and returns a new instance of the Meta HTML element.
     * 
     * @return Meta
     */
    public static function Meta() : Meta
    {
        return new Meta();
    }


    /**
     * Input element
     * 
     * Creates and returns a new instance of the Input HTML element.
     * 
     * @return Input
     */
    public static function Input() : Input
    {
        return new Input();
    }
}

?>