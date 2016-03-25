<?php
/**
 * Date: 2016/3/25
 */

namespace DesignPatterns\Structural\Facade;

class BiosInterface
{
    /**
     * execute the BIOS;
     */
    public function execute()
    {
        var_dump(__METHOD__);
    }

    /**
     * wait for halt
     */
    public function waitForKeyPress()
    {
        var_dump(__METHOD__);
    }

    /**
     * launches the OS
     *
     * @param OsInterface $os
     */
    public function launch(OsInterface $os)
    {
        var_dump(__METHOD__);
    }

    /**
     * power down BIOS
     */
    public function powerDown()
    {
        var_dump(__METHOD__);
    }
}