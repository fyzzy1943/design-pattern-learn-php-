<?php
/**
 * Date: 2016/3/22
 */

namespace Test;

use DesignPatterns\Structural\Decorator\RenderInJson;
use DesignPatterns\Structural\Decorator\RenderInXml;
use DesignPatterns\Structural\Decorator\Webservice;

class DecoratorTest
{
    protected $service;

    protected function setUp()
    {
        $this->service = new Webservice(['foo' => 'bar']);
    }

    public function testJsonDecorator()
    {
        $service = new RenderInJson($this->service);
        var_dump($service->renderData());
    }

    public function testXmlDecorator()
    {
        $service = new RenderInXml($this->service);
        var_dump($service->renderData());
    }

    public function test()
    {
        echo '<div>Decorator Test</div>';

        $this->setUp();
        $this->testJsonDecorator();
        $this->testXmlDecorator();
    }
}