<?php
/**
 * Date: 2016/3/29
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

abstract class Handler
{
    /**
     * @var Handler
     */
    private $successor = null;

    final public function append(Handler $handler)
    {
        if (is_null($this->successor)) {
            $this->successor = $handler;
        } else {
            $this->successor->append($handler);
        }
    }
}