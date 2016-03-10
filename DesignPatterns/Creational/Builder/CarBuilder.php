<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/10
 * Time: 15:11
 */

namespace DesignPatterns\Creational\Builder;


/**
 * Class CarBuilder 建造汽车
 * @package DesignPatterns\Creational\Builder
 */
class CarBuilder implements BuilderInterface
{
    /**
     * @var Parts\Car
     */
    protected $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('wheelRR', new Parts\Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    public function getVehicle()
    {
        return $this->car;
    }
}