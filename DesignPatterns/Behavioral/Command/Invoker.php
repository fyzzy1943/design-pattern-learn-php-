<?php
/**
 * Date: 2016/3/30
 */

namespace DesignPatterns\Behavioral\Command;

class Invoker
{
    /**
     * @var CommandInterface
     */
    protected $command;

    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        $this->command->execute();
    }
}