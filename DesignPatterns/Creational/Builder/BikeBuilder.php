<?php

namespace DesignPatterns\Creational\Builder;

class BikeBuilder implements BuilderInterface
{
    /**
     * @var Parts\Bike
     */
    protected $bike;

    public function addDoors()
    {

    }

    public function addEngine()
    {
        $this->bike->setPart('engine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->bike->setPart('forwardWheel', new Parts\Wheel());
        $this->bike->setPart('rearWheel', new Parts\Wheel());
    }

    public function createVehicle()
    {
        $this->bike = new Parts\Bike();
    }

    public function getVehicle()
    {
        return $this->bike;
    }
}