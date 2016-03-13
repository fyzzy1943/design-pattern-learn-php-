<?php

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