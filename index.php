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

//(new \Test\IteratorTest())->test();

echo <<<EOF
<script>
    function oppositeColor(a){
        a=a.replace('#','');
        var str1, str2, str3;
        str1 = ('0'+(255-parseInt(a.substring(0,2), 16)).toString(16)).slice(-2);
        str2 = ('0'+(255-parseInt(a.substring(2,4), 16)).toString(16)).slice(-2);
        str3 = ('0'+(255-parseInt(a.substring(4,6), 16)).toString(16)).slice(-2);
//        alert('#'+str1+str2+str3);
        return '#'+str1+str2+str3;
    }
    
    var divs = document.getElementsByTagName('div');
    for (x in divs) {
        var color = '#'+('00000'+(Math.random()*0x1000000<<0).toString(16)).slice(-6);
        divs[x].style.backgroundColor = color;
//        divs[x].style.color = oppositeColor(color);
    }
</script>
EOF;
