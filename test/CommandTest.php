<?php
/**
 * Date: 2016/3/30
 */

namespace Test;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;

class CommandTest
{
    /**
     * @var Invoker
     */
    protected $invoker;

    /**
     * @var Receiver
     */
    protected $receiver;

    protected function setUp()
    {
        $this->invoker = new Invoker();
        $this->receiver = new Receiver();
    }

    public function test()
    {
        echo '<div>Command Test</div>';

        $this->setUp();
        $this->invoker->setCommand(new HelloCommand($this->receiver));
        $this->invoker->run();

//        $cmd = new Invoker();
//        $cmd->setCommand(new HelloCommand(null));
//        $cmd->run();
    }
}

/**
 * 这个模式可能真正用起来会好理解一些。
 */