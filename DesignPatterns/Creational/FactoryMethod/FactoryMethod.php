<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryMethod
{
    const CHEAP = 1;
    const FAST = 2;

    abstract protected function createVehicle($type);

    /**
     * @param int $type
     * @return VehicleInterface a new vehicle
     */
    public function create($type)
    {
        $obj = $this->createVehicle($type);
        $obj->setColor("#f00");

        return $obj;
    }
}