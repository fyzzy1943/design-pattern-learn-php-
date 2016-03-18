<?php
/**
 * Date: 2016/3/18
 */

namespace Test;

use DesignPatterns\Structural\Bridge\Assemble;
use DesignPatterns\Structural\Bridge\Car;
use DesignPatterns\Structural\Bridge\Motorcycle;
use DesignPatterns\Structural\Bridge\Produce;

class BridgeTest
{
    public function testCar()
    {
        $vehicle = new Car(new Produce(), new Assemble());
        $vehicle->manufacture();
    }

    public function testMotorcycle()
    {
        $vehicle = new Motorcycle(new Produce(), new Assemble());
        $vehicle->manufacture();
    }

    public function test()
    {
        echo '<div>Bridge Test</div>';

        $this->testCar();
        $this->testMotorcycle();
    }
}