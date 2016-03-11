<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/11
 * Time: 10:02
 */

namespace DesignPatterns\Creational\FactoryMethod;


/**
 * 车辆接口
 * Interface VehicleInterface
 * @package DesignPatterns\Creational\FactoryMethod
 */
interface VehicleInterface
{
    /**
     * 设置车辆颜色
     * @param string $rgb
     */
    public function setColor($rgb);
}