<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/11
 * Time: 10:07
 */

namespace DesignPatterns\Creational\FactoryMethod;


class Bicycle implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}