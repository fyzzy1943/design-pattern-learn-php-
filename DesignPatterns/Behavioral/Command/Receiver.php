<?php
/**
 * Date: 2016/3/30
 */

namespace DesignPatterns\Behavioral\Command;

class Receiver
{
    public function write($str)
    {
        echo $str;
    }
}