<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/7
 * Time: 16:48
 */

namespace DesignPatterns\Creational\AbstractFactory\Json;

use DesignPatterns\Creational\AbstractFactory\Text as BaseText;

class Text extends BaseText
{
    public function render()
    {
        return json_encode(array('content'=>$this->text));
    }
}