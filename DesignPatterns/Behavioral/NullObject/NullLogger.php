<?php
/**
 * Date: 2016/4/1
 */

namespace DesignPatterns\Behavioral\NullObject;

class NullLogger implements LoggerInterface
{
    public function log($str)
    {
        // do nothing ..
    }
}