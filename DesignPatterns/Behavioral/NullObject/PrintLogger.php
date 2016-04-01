<?php
/**
 * Date: 2016/4/1
 */

namespace DesignPatterns\Behavioral\NullObject;

class PrintLogger implements LoggerInterface
{
    public function log($str)
    {
        echo $str;
    }
}