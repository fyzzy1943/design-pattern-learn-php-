<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/7
 * Time: 16:34
 */

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