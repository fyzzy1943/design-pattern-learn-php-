<?php
/**
 * Date: 2016/3/18
 */

namespace DesignPatterns\Structural\Bridge;

abstract class Vehicle
{
    protected $workshop1;
    protected $workshop2;

    protected function __construct(Workshop $workshop1, Workshop $workshop2)
    {
        $this->workshop1 = $workshop1;
        $this->workshop2 = $workshop2;
    }

    public function manufacture()
    {

    }
}