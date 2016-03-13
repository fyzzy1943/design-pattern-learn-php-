<?php

namespace Test;

use DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\GermanFactory;
use DesignPatterns\Creational\FactoryMethod\ItalianFactory;

class FactoryMethodTest
{
    protected $type = array(
        FactoryMethod::CHEAP,
        FactoryMethod::FAST,
    );

    public function getShop()
    {
        return array(
            'german'=>new GermanFactory(),
            'italian'=>new ItalianFactory(),
        );
    }

    /**
     * 测试工厂
     * @param FactoryMethod $shop
     */
    public function testCreation(FactoryMethod $shop)
    {
        foreach ($this->type as $type) {
            $vehicle = $shop->create($type);
            var_dump($vehicle);
        }
    }

    /**
     * 测试类型不存在的情况
     * @param FactoryMethod $shop
     */
    public function testUnknownType(FactoryMethod $shop)
    {
        $shop->create('unknown');
    }

    public function test()
    {
        echo '<div>FactoryMethod Test</div>';

        $shops = $this->getShop();
        $this->testCreation($shops['german']);
//        $this->testUnknownType($shops['italian']);
    }
}