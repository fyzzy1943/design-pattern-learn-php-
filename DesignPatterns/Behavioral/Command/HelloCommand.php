<?php
/**
 * Date: 2016/3/30
 */

namespace DesignPatterns\Behavioral\Command;

class HelloCommand implements CommandInterface
{
    /**
     * @var Receiver
     */
    protected $output;

    /**
     * HelloCommand constructor.
     * 每一个具体的命令基于不同的Receiver
     * 它们可以是一个、多个，甚至完全没有Receiver
     *
     * @param Receiver $console
     */
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    public function execute()
    {
        // 没有Receiver的时候完全通过命令类来实现功能
        $this->output->write('Hello World');
    }
}