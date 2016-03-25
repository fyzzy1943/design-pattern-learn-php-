<?php
/**
 * Date: 2016/3/25
 */

namespace DesignPatterns\Structural\Facade;

class OsInterface
{
    /**
     * halt the OS
     */
    public function halt()
    {
        var_dump(__METHOD__);
    }

    public function getName()
    {
        return 'linux';
    }
}