<?php
/**
 * Date: 2016/3/15
 */

namespace Test;

use DesignPatterns\Creational\StaticFactory\StaticFactory;

class StaticFactoryTest
{
    public function getTypeList()
    {
        return array(
            'string',
            'number',
        );
    }

    public function testCreation($type)
    {
        $obj = StaticFactory::factory($type);
        var_dump($obj);
    }

    public function test()
    {
        echo '<div>StaticFactory Test</div>';

        $this->testCreation('string');
        $this->testCreation('string');
    }
}