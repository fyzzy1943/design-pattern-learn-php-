<?php
/**
 * Date: 2016/3/18
 */

namespace DesignPatterns\Structural\Bridge;

class Produce implements Workshop
{
    public function work()
    {
        var_dump(__METHOD__);
    }
}