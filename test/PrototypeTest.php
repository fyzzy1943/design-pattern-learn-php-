<?php
/**
 * Date: 2016/3/14
 */

namespace Test;

use DesignPatterns\Creational\Prototype\BarBookPrototype;
use DesignPatterns\Creational\Prototype\BookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;

class PrototypeTest
{
    public function getPrototype()
    {
        return array(
            'foo' => new FooBookPrototype(),
            'bar' => new BarBookPrototype(),
        );
    }

    public function testCreation(BookPrototype $prototype)
    {
        var_dump($prototype);
        $book = clone $prototype;
        $book->setTitle($book->getCategory() . 'Book');

        var_dump($book instanceof BookPrototype ? 'true' : 'false');
        var_dump($book);
    }

    public function test()
    {
        echo '<div>Prototype Test</div>';
        $prototype = $this->getPrototype();
        $this->testCreation($prototype['foo']);
    }
}