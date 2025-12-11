<?php

require_once __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors','1');
ini_set('display_startup_erros','1');
error_reporting(E_ALL);

use DisciteHtml\Config\Enums\Inputs\AcceptedType;
use DisciteHtml\Config\Enums\Inputs\AutoCompleted;
use DisciteHtml\Config\Enums\Inputs\InputType;
use DisciteHtml\DisciteHtml;

$childHtml = DisciteHtml::Span()
        ->add('Span text');

$disciteHtml = DisciteHtml::Div()
    ->id('DivElement')
    ->classes(['Class1','Class2'])
    ->add(
        DisciteHtml::A()
            ->id('link')
            ->attrs(['href'=>'/test.php','link'=>'fezgze','form'=>'blue'])
            ->add(DisciteHtml::P()
                ->add('Lien')
        ))
    ->add(
        DisciteHtml::P()
            ->add('text')
    )
    ->add(
        DisciteHtml::Input()
            ->type(InputType::DATE)
            ->name('birthDay')
            ->id('inputId')
            ->styles(['background'=>'red','color'=>'white'])
    )
    ->add($childHtml)
    ->add(DisciteHtml::Tbody());

$childHtml->id('spanIdTest');

$test = DisciteHtml::Input()
        ->type(InputType::EMAIL)
        ->placeholder('Adresse email')
        ->accept(AcceptedType::FILE_PPT,AcceptedType::FILE_PPTX)
        ->autoCompleted(AutoCompleted::EMAIL)
        ->id('adresse')
        ->selfAttrs('test', 'demo', 'sample')
        ->classes(['input_search','input_prmiary'])
        ->styles(['border'=>'1px solid purple']);
        
DisciteHtml::presets($test);

$tbody = DisciteHtml::Tbody()
            ->hasCheckbox(true)
            ->hasActions(true)
            
            ->id('table_body');




$table = DisciteHtml::Table()
            ->defaultEmptyColumn(
                DisciteHtml::P()
                    ->add('-')
            )
            ->checkbox(
                DisciteHtml::Input()
                    ->type(InputType::CHECKBOX)
            )
            ->actions(
                DisciteHtml::P()
                    ->add('Actions')
            )
            ->template(
                DisciteHtml::Td()
                    ->id('column_1')
                    ->classes(['column_class'])
                    ->styles(['color'=>'blue'])
            )
            ->template(
                DisciteHtml::Td()
                    ->id('column_2')
                    ->classes(['column_class'])
                    ->styles(['color'=>'green'])
            )
            ->template(
                DisciteHtml::Td()
                    ->id('column_3')
                    ->classes(['column_class'])
                    ->styles(['color'=>'red'])
            )
            ->id('table_example')
            ->header(
                DisciteHtml::P()->add('Header 1'),
                DisciteHtml::P()->add('Header 2'),
                DisciteHtml::P()->add('Header 3')
            );


$table->body(
    DisciteHtml::P()->add('Row 1 - Col 1'),
    null,
    DisciteHtml::P()->add('Row 1 - Col 3')
);

$table->body(
    DisciteHtml::P()->add('Row 2 - Col 1'),
    DisciteHtml::P()->add('Row 2 - Col 2'),
    DisciteHtml::P()->add('Row 2 - Col 3')
);
$table->body(
    DisciteHtml::P()->add('Row 3 - Col 1'),
    DisciteHtml::P()->add('Row 3 - Col 2'),
    null
);
$table->body(
    DisciteHtml::P()->add('Row 4 - Col 1'),
    DisciteHtml::P()->add('Row 4 - Col 2'),
    DisciteHtml::P()->add('Row 4 - Col 3')
);

echo $table->toHtml();


// $foo = DisciteHtml::Label()
//         ->for('');

// echo $test->id('bite')->toHtml();
// echo $test->placeholder('Ceci est un second test')->classes(['input_pass','input_prim'])->id('chien')->toHtml();

// echo $test->toHtml();

// echo $disciteHtml->toHtml();

?>