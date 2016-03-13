<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Porsche implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }

    public function addTuningAMG()
    {

    }
}