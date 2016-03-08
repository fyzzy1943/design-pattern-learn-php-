<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/7
 * Time: 16:44
 */

namespace DesignPatterns\Creational\AbstractFactory\Json;

use DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

class Picture extends BasePicture
{
    public function render()
    {
        return json_encode(array('title'=>$this->name, 'path'=>$this->path));
    }
}