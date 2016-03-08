<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/7
 * Time: 16:39
 */

namespace DesignPatterns\Creational\AbstractFactory;


interface MediaInterface
{
    /**
     * JSON 或 HTML（取决于具体类）输出的未经处理的渲染
     *
     * @return string
     */
    public function render();
}