<?php

namespace DesignPatterns\Creational\AbstractFactory;

class HtmlFactory extends AbstractFactory
{
    public function createText($content)
    {
        return new Html\Text($content);
    }

    public function createPicture($path, $name = '')
    {
        return new Html\Picture($path, $name);
    }
}