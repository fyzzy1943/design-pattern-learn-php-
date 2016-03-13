<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractFactory
{
    /**
     * 创建文本组件
     *
     * @param string $content
     * @return Text
     */
    abstract public function createText($content);

    /**
     * @param string $path
     * @param string $name
     * @return Picture
     */
    abstract public function createPicture($path, $name = '');
}