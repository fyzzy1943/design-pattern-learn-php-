<?php
/**
 * Date: 2016/3/27
 */

namespace Test;

use DesignPatterns\Structural\Proxy\RecordProxy;

class ProxyTest
{
    public function test()
    {
        echo '<div>Proxy Test</div>';

        $data = [];
        $proxy = new RecordProxy($data);
        $proxy->foo = 'bar';
        $proxy->bar = false;

        var_dump($proxy);
    }
}