<?php
/**
 * Date: 2016/3/31
 */

namespace DesignPatterns\Behavioral\Memento;

class Originator
{
    private $state;

    public function setState($state)
    {
        // 在这里要检查该类子类内部的状态类型， 或使用依赖注入
        $this->state = $state;
    }

    public function getStateAsMemento()
    {
        // 在Memento中保存一份隔离的备份， 但是这样处理非常不严谨
        $state = is_object($this->state) ? clone $this->state : $this->state;

        return new Memento($state);
    }

    public function restoreFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}