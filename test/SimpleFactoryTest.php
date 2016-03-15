<?php
/**
 * Date: 2016/3/15
 */

namespace Test;

use DesignPatterns\Creational\SimpleFactory\ConcreteFactory;

class SimpleFactoryTest
{
    protected $factory;

    protected function setUp()
    {
        $this->factory = new ConcreteFactory();
    }

    public function getType()
    {
        return array(
            'bicycle',
            'scooter',
        );
    }

    public function testCreation($type)
    {
        $obj = $this->factory->createVehicle($type);
        var_dump($obj);
    }

    public function test()
    {
        echo '<div>SimpleFactory Test</div>';

        $this->setUp();
        $type = $this->getType();
        $this->testCreation($type[0]);
    }
}