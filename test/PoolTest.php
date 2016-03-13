<?php
/**
 * Date: 2016/3/13
 */

namespace Test;

use DesignPatterns\Creational\Pool\Pool;

class PoolTest
{
    public function test()
    {
        echo '<div>Pool Test</div>';

        $pool = new Pool('Test\TestWorker');
        $worker = $pool->get();

        var_dump($worker);

        $worker->id = 5;
        $pool->dispose($worker);

        var_dump($worker);
        var_dump($worker);

        $worker = $pool->get();

        var_dump($worker);
    }
}

class TestWorker
{
    public $id = 1;
}