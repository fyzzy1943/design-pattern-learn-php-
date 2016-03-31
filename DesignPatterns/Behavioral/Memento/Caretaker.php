<?php
/**
 * Date: 2016/3/31
 */

namespace DesignPatterns\Behavioral\Memento;

class Caretaker
{
    protected $history = array();

    public function getFromHistory($id)
    {
        return $this->history[$id];
    }

    public function saveToHistory(Memento $state)
    {
        $this->history[] = $state;
    }

    public function runCustomLogic()
    {
        $originator = new Originator();

        $originator->setState('State1');

        $originator->setState('State2');

        $this->saveToHistory($originator->getStateAsMemento());

        $originator->setState('State3');

        $this->saveToHistory($originator->getStateAsMemento());
    }
}