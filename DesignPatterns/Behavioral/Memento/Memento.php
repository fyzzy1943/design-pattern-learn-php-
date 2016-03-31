<?php
/**
 * Date: 2016/3/31
 */

namespace DesignPatterns\Behavioral\Memento;

class Memento
{
    /**
     * @var
     */
    private $state;

    /**
     * Memento constructor.
     * @param $stateToSave
     */
    public function __construct($stateToSave)
    {
        $this->state = $stateToSave;
    }

    public function getState()
    {
        return $this->state;
    }
}