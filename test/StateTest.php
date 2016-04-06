<?php
/**
 * Date: 2016/4/6
 */

namespace Test;

use DesignPatterns\Behavioral\State\OrderController;

class StateTest
{
    public function test()
    {
        echo '<div>State Test</div>';

        $controller = new OrderController();
        $controller->completeAction(1);
        $controller->shipAction(1);
    }
}
/**
 * 个人感觉这个模式也可以配合好多其他模式使用
 */