<?php

$composer = require 'vendor/autoload.php';

echo <<<EOF
<style>
  div{
    color: #fff;
  }
</style>
EOF;

// every time the compiler through, feel more comfortable than the climax.

echo '<pre>';

foreach (array_slice(scandir(dirname(__FILE__) . '/test'), 2) as $file) {
    $class = '\Test\\' . substr($file, 0, strrpos($file, '.'));
    (new $class)->test();
}

echo <<<EOF
<script>
    var divs = document.getElementsByTagName('div');
    for (x in divs) {
        divs[x].style.backgroundColor = '#'+('00000'+(Math.random()*0x1000000<<0).toString(16)).slice(-6);
    }
</script>
EOF;
