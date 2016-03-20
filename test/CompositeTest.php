<?php
/**
 * Date: 2016/3/20
 */

namespace Test;

use DesignPatterns\Structural\Composite\Form;
use DesignPatterns\Structural\Composite\InputElement;
use DesignPatterns\Structural\Composite\TextElement;

class CompositeTest
{
    public function test()
    {
        echo '<div>Composite Test</div>';

        $form = new Form();
        $form->addElement(new InputElement());
        $form->addElement(new TextElement());

        $embed = new Form();
        $embed->addElement(new InputElement());
        $embed->addElement(new TextElement());

        $form->addElement($embed);

        var_dump($form->render());
    }
}