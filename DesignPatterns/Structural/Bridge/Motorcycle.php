<?php
/**
 * Date: 2016/3/18
 */

namespace DesignPatterns\Structural\Bridge;

class Motorcycle extends Vehicle
{
    public function __construct(Workshop $workshop1, Workshop $workshop2)
    {
        parent::__construct($workshop1, $workshop2);
    }

    public function manufacture()
    {
        var_dump(__METHOD__);
        $this->workshop1->work();
        $this->workshop2->work();
    }
}