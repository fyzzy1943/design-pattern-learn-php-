<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/10
 * Time: 14:57
 */

namespace DesignPatterns\Creational\Builder;


/**
 * Interface 建造者
 * @package DesignPatterns\Creational\Builder
 */
interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle();
}