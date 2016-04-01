<?php
/**
 * Date: 2016/4/1
 */

namespace Test;

use DesignPatterns\Behavioral\Observer\User;
use DesignPatterns\Behavioral\Observer\UserObserver;

class ObserverTest
{
    protected $observer;

    protected function setUp()
    {
        $this->observer = new UserObserver();
    }

    public function testNotify()
    {
        $subject = new User();
        $subject->attach($this->observer);
        $subject->property = 123;
    }

    public function testAttachAndDetach()
    {
        $subject = new User();
        $reflection = new \ReflectionProperty($subject, 'observer');

        $reflection->setAccessible(true);
        $observers = $reflection->getValue($subject);
        var_dump($observers);

        $subject->attach($this->observer);
        $subject->property = 123;
        var_dump($subject);

        $subject->detach($this->observer);
        $subject->property = 456;
        var_dump($subject);
    }

    public function test()
    {
        echo '<div>Observer Test</div>';

        $this->setUp();
        $this->testNotify();
        $this->testAttachAndDetach();
    }
}
/**
 * 不实际去用，还是很难理解
 */