<?php

namespace DesignPatterns\Creational\AbstractFactory;

class JsonFactory extends AbstractFactory
{
    public function createText($content)
    {
        return new Json\Text($content);
    }

    public function createPicture($path, $name = '')
    {
        return new Json\Picture($path, $name);
    }
}