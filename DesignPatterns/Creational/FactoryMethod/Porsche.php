<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/11
 * Time: 10:05
 */

namespace DesignPatterns\Creational\FactoryMethod;


class Porsche implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }

    public function addTuningAMG()
    {

    }
}