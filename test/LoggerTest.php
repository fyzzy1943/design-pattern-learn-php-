<?php
/**
 * Date: 2016/4/1
 */

namespace Test;

use DesignPatterns\Behavioral\NullObject\NullLogger;
use DesignPatterns\Behavioral\NullObject\PrintLogger;
use DesignPatterns\Behavioral\NullObject\Service;

class LoggerTest
{
    public function testNormal()
    {
        $service = new Service(new PrintLogger());
        $service->doSomething();
    }

    public function testNull()
    {
        $service = new Service(new NullLogger());
        $service->doSomething();
    }

    public function test()
    {
        echo '<div>Logger Test</div>';

        $this->testNormal();
        $this->testNull();
    }
}
/**
 * 这个设计模式，就是要善用接口来约束类的行为
 */