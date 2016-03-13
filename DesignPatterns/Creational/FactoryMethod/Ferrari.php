<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Ferrari implements VehicleInterface
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