<?php
/**
 * Date: 2016/3/29
 */

namespace Test;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Request;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible\FastStorage;
use DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible\SlowStorage;

class ChainTest
{
    protected $chain;

    protected function setUp()
    {
        $this->chain = new FastStorage(array('bar'=>'baz'));
        $this->chain->append(new SlowStorage(array('bar'=>'baz', 'foo'=>'bar')));
    }

    public function makeRequest()
    {
        $request = new Request();
        $request->verb = 'get';

        return array($request);
    }

    public function testFastStorage($request)
    {
        $request->key = 'bar';
        $ret = $this->chain->handle($request);

        var_dump($ret);
        var_dump($request);
    }

    public function testSlowStorage($request)
    {
        $request->key = 'foo';
        $ret = $this->chain->handle($request);

        var_dump($ret);
        var_dump($request);
    }

    public function test()
    {
        echo '<div>Chain Test</div>';

        $this->setUp();
        $this->testFastStorage($this->makeRequest()[0]);
        $this->testSlowStorage($this->makeRequest()[0]);
    }
}

/**
 * 从这个例子看来， 即使使用责任链模式， request也是要首先分配好的， 如果有重复， 可能会发生意想不到的情况，
 * 当然也可能是这个测试的方式有问题， 好像这样做和介绍说的并不太一样。
 */