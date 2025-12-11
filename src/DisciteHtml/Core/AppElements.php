<?php

namespace DisciteHtml\Core;

use DisciteHtml\Elements\Custom;
use DisciteHtml\Elements\Paired\_Paragraph;
use DisciteHtml\Elements\Paired\A;
use DisciteHtml\Elements\Paired\Link;
use DisciteHtml\Elements\Paired\Article;
use DisciteHtml\Elements\Paired\Aside;
use DisciteHtml\Elements\Paired\B;
use DisciteHtml\Elements\Paired\Button;
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
use DisciteHtml\Elements\Paired\Script;
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
use DisciteHtml\Elements\Voided\Br;
use DisciteHtml\Elements\Voided\Hr;
use DisciteHtml\Elements\Voided\Img;
use DisciteHtml\Elements\Voided\Meta;
use DisciteHtml\Elements\Voided\Input;

class AppElements
{
    const ELEMENT_CUSTOM = Custom::class;

    const ELEMENT__PARAGRAPH = _Paragraph::class;

    const ELEMENT_A = A::class;

    const ELEMENT_LINK = Link::class;

    const ELEMENT_ARTICLE = Article::class;

    const ELEMENT_ASIDE = Aside::class;

    const ELEMENT_B = B::class;

    const ELEMENT_BUTTON = Button::class;

    const ELEMENT_DIV = Div::class;

    const ELEMENT_EM = Em::class;

    const ELEMENT_FIGURE = Figure::class;

    const ELEMENT_FOOTER = Footer::class;

    const ELEMENT_FORM = Form::class;

    const ELEMENT_H1 = H1::class;

    const ELEMENT_H2 = H2::class;

    const ELEMENT_H3 = H3::class;

    const ELEMENT_H4 = H4::class;

    const ELEMENT_H5 = H5::class;

    const ELEMENT_H6 = H6::class;

    const ELEMENT_HEAD = Head::class;

    const ELEMENT_HEADER = Header::class;

    const ELEMENT_LABEL = Label::class;

    const ELEMENT_LI = Li::class;

    const ELEMENT_MAIN = Main::class;

    const ELEMENT_NAV = Nav::class;

    const ELEMENT_OL = Ol::class;

    const ELEMENT_OPTION = Option::class;

    const ELEMENT_P = P::class;

    const ELEMENT_SCRIPT = Script::class;

    const ELEMENT_SECTION = Section::class;

    const ELEMENT_SELECT = Select::class;

    const ELEMENT_SPAN = Span::class;

    const ELEMENT_STRONG = Strong::class;

    const ELEMENT_TABLE = Table::class;

    const ELEMENT_TBODY = Tbody::class;

    const ELEMENT_TD = Td::class;

    const ELEMENT_TEXTAREA = Textarea::class;

    const ELEMENT_TFOOT = Tfoot::class;

    const ELEMENT_TH = Th::class;

    const ELEMENT_THEAD = Thead::class;

    const ELEMENT_TR = Tr::class;

    const ELEMENT_UL = Ul::class;

    const ELEMENT_BASE = Base::class;

    const ELEMENT_BR = Br::class;

    const ELEMENT_HR = Hr::class;

    const ELEMENT_IMG = Img::class;

    const ELEMENT_META = Meta::class;

    const ELEMENT_INPUT = Input::class;

}

?>