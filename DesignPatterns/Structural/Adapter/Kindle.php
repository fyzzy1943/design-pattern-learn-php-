<?php
/**
 * Date: 2016/3/17
 */

namespace DesignPatterns\Structural\Adapter;

class Kindle implements EBookInterface
{
    public function pressNext()
    {
        var_dump(__METHOD__);
    }

    public function pressStart()
    {
        var_dump(__METHOD__);
    }
}