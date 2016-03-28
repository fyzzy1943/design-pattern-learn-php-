<?php

$composer = require 'vendor/autoload.php';

echo <<<EOF
<style>
  div{
    color: #fff;
    background-color: #666;
  }
</style>
EOF;

// every time the compiler through, feel more comfortable than the climax.

echo '<pre>';
//(new \Test\AbstractFactoryTest())->test();
//(new \Test\BuilderTest())->test();
//(new \Test\FactoryMethodTest())->test();
//(new \Test\MultitonTest())->test();
//(new \Test\PoolTest())->test();
//(new \Test\PrototypeTest())->test();
//(new \Test\SimpleFactoryTest())->test();
//(new \Test\SingletonTest())->test();
//(new \Test\StaticFactoryTest())->test();
//(new \Test\AdapterTest())->test();
//(new \Test\BridgeTest())->test();
//(new \Test\CompositeTest())->test();
//(new \Test\DataMapperTest())->test();
//(new \Test\DecoratorTest())->test();
//(new \Test\DependencyInjectionTest())->test();
//(new \Test\FacadeTest())->test();
//(new \Test\FluentInterfaceTest())->test();
//(new \Test\ProxyTest())->test();

foreach (array_slice(scandir(dirname(__FILE__) . '/test'), 2) as $file) {
    $class = '\Test\\' . substr($file, 0, strrpos($file, '.'));
    (new $class)->test();
}
