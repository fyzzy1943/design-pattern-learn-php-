<?php

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