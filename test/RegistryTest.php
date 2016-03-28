<?php
/**
 * Date: 2016/3/28
 */

namespace Test;

use DesignPatterns\Structural\Registry\Registry;

class RegistryTest
{
    public function test()
    {
        echo '<div>Registry Test</div>';

        Registry::set(Registry::LOGGER, new \StdClass());

        $logger = Registry::get(Registry::LOGGER);
        var_dump($logger);
    }
}