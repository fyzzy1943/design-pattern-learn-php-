<?php
/**
 * Date: 2016/3/13
 */

namespace DesignPatterns\Creational\Pool;

class Worker
{
    public function __construct()
    {
    }

    public function run($image, array $callback)
    {
        // do something with $image
        // and when it's done, execute callback

        call_user_func($callback, $this);
    }
}