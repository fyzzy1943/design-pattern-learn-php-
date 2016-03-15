<?php
/**
 * Date: 2016/3/15
 */

namespace Test;

use DesignPatterns\Creational\Singleton\Singleton;

class SingletonTest
{
    public function test()
    {
        echo '<div>Singleton Test</div>';

        $one = Singleton::getInstance();
        $two = Singleton::getInstance();

        var_dump($one === $two);
        var_dump($one, $two);
    }
}