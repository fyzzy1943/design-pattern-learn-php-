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

foreach (array_slice(scandir(dirname(__FILE__) . '/test'), 2) as $file) {
    $class = '\Test\\' . substr($file, 0, strrpos($file, '.'));
    (new $class)->test();
}
