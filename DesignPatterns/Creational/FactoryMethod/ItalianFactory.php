<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/11
 * Time: 9:53
 */

namespace DesignPatterns\Creational\FactoryMethod;


/**
 * 意大利造车厂
 * Class ItalianFactory
 * @package DesignPatterns\Creational\FactoryMethod
 */
class ItalianFactory extends FactoryMethod
{
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                return new Ferrari();
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}