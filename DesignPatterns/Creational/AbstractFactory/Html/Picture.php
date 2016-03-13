<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

class Picture extends BasePicture
{
    public function render()
    {
        return sprintf('<img src="%s" title="%s" /', $this->path, $this->name);
    }
}