<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/8
 * Time: 10:33
 */

require 'vendor/autoload.php';

echo <<<EOF
<style>
  div{
    color: #fff;
    background-color: #666;
  }
</style>
EOF;

(new \Test\AbstractFactoryTest())->test();
(new \Test\BuilderTest())->test();
(new \Test\FactoryMethodTest())->test();