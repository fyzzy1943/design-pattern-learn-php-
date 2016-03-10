<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/10
 * Time: 15:04
 */

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