<?php
/**
 * Date: 2016/3/24
 */

namespace Test;


use DesignPatterns\Structural\DependencyInjection\ArrayConfig;
use DesignPatterns\Structural\DependencyInjection\Connection;

class DependencyInjectionTest
{
    protected $config;

    protected $source;

    protected function config()
    {
        return array(
            'host' => 'github.com',
        );
    }

    public function setUp()
    {
        $this->source = $this->config();
        $this->config = new ArrayConfig($this->source);
    }

    public function test()
    {
        echo '<div>DependencyInjection Test</div>';

        $this->setUp();
        $connection = new Connection($this->config);
        $connection->connect();
        var_dump($this->source['host']);
        var_dump($connection->getHost());
    }
}
