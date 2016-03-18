<?php

require 'vendor/autoload.php';

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
(new \Test\AbstractFactoryTest())->test();
(new \Test\BuilderTest())->test();
(new \Test\FactoryMethodTest())->test();
(new \Test\MultitonTest())->test();
(new \Test\PoolTest())->test();
(new \Test\PrototypeTest())->test();
(new \Test\SimpleFactoryTest())->test();
(new \Test\SingletonTest())->test();
(new \Test\StaticFactoryTest())->test();
(new \Test\AdapterTest())->test();
(new \Test\BridgeTest())->test();