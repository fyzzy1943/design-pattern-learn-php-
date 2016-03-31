<?php
/**
 * Date: 2016/3/31
 */

namespace Test;

use DesignPatterns\Behavioral\Mediator\Mediator;
use DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use DesignPatterns\Behavioral\Mediator\Subsystem\Server;

class MediatorTest
{
    protected $client;

    protected function setUp()
    {
        $media = new Mediator();
        $this->client = new Client($media);
        $media->setColleague(new Database($media), $this->client, new Server($media));
    }

    public function test()
    {
        echo '<div>Mediator Test</div>';

        $this->setUp();
        $this->client->request();
    }
}

/**
 * 中介者模式的优点和缺点都非常明显， 即使使用中介者模式， 也难以忽略文档的规范作用。
 */