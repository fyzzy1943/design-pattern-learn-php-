<?php

namespace DesignPatterns\Creational\Builder\Parts;

/**
 * Class Vehicle 车辆接口
 * @package DesignPatterns\Creational\Builder\Parts
 */
abstract class Vehicle
{
    /**
     * @var array
     */
    protected $data;

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}