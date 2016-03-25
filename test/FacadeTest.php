<?php
/**
 * Date: 2016/3/25
 */

namespace Test;

use DesignPatterns\Structural\Facade\BiosInterface;
use DesignPatterns\Structural\Facade\Facade;
use DesignPatterns\Structural\Facade\OsInterface;

class FacadeTest
{

    public function test()
    {
        echo '<div>DependencyInjection Test</div>';

        $os = new OsInterface();
        $bios = new BiosInterface();
        $facade = new Computer($bios, $os);

        $this->testComputer($facade, $os);
    }

    public function testComputer(Computer $facade, OsInterface $os)
    {
        // interface is simpler
        $facade->turnOn();

        // but I can access to lower component
        var_dump($os->getName());
    }
}

class Computer extends Facade
{

}