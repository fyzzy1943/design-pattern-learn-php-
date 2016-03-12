<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/12
 * Time: 16:10
 */

namespace Test;


use DesignPatterns\Creational\Multiton\Multiton;

class MultitonTest
{
    public function test()
    {
        echo '<div>Multiton Test</div>';

        $instance_1 = Multiton::getInstance(Multiton::INSTANCE_1);
        $instance_2 = Multiton::getInstance(Multiton::INSTANCE_2);
        $instance_3 = Multiton::getInstance(Multiton::INSTANCE_1);

        var_dump($instance_1);
        var_dump($instance_2);
        var_dump($instance_3);
    }
}