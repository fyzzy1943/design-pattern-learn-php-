<?php
/**
 * Date: 2016/3/18
 */

namespace DesignPatterns\Structural\Bridge;

class Assemble implements Workshop
{
    public function work()
    {
        var_dump(__METHOD__);
    }
}