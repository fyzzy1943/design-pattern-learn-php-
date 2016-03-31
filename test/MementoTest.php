<?php
/**
 * Date: 2016/3/31
 */

namespace Test;

use DesignPatterns\Behavioral\Memento\Caretaker;
use DesignPatterns\Behavioral\Memento\Originator;

class MementoTest
{
    public function testUsage()
    {
        $originator = new Originator();
        $caretaker = new Caretaker();

        $character = new \stdClass();
        $character->name = 'Gandalf';
        $originator->setState($character);

        $character->name = 'Gandalf the Grey';
        $character->race = 'Maia';
        $snapshot = $originator->getStateAsMemento();
        $caretaker->saveToHistory($snapshot);

        $character->name = 'Sauron';
        $character->race = 'Ainur';
        var_dump('usage first', $character, $originator);

        $snapshot = $originator->getStateAsMemento();
        $caretaker->saveToHistory($snapshot);

        $rollback = $caretaker->getFromHistory(0);
        $originator->restoreFromMemento($rollback);
        $character = $rollback->getState();
        var_dump('usage second', $character);

        $character->name = 'Gandalf the White';

        var_dump('usage third', $character, $originator);
    }

    public function testString()
    {
        $originator = new Originator();
        $originator->setState('state1');
        var_dump('string first', $originator);

        $originator->setState('state2');

        $snapshot = $originator->getStateAsMemento();

        $originator->setState('state3');
        var_dump('string second', $originator);

        $originator->restoreFromMemento($snapshot);
        var_dump('string third', $originator);
    }

    public function testCanChangeActualState()
    {
        $originator = new Originator();
        $first = new \stdClass();

        $first->foo = 1;

        $originator->setState($first);
        $snapshot = $originator->getStateAsMemento();
        $second = $snapshot->getState();

        $second->bar = 2;
        var_dump('actual first', $first, $second);

        $originator->restoreFromMemento($snapshot);

        $first->foo = 11;
        $second->bar = 22;
        var_dump('actual second', $first, $second);
    }

    /**
     * 可以看到目前备忘录模式非常安全， 但是因为php的机制， clone还是需要特殊照顾一下， 不然就会像下面这样
     */

    public function testActual()
    {
        $originator = new Originator();
        $first = new \stdClass();
        $first->foo = new \stdClass();
        $first->foo->baz = 1;

        $originator->setState($first);
        $snapshot = $originator->getStateAsMemento();
        $second = $snapshot->getState();

        var_dump('ac first', $first, $second);

        $second->foo->baz = 22;
        var_dump('ac second', $first, $second);
    }

    /**
     * 这就是问题所在了， 对象中的对象并没有clone， 所以才会这样
     */

    public function test()
    {
        echo '<div>Memento Test</div>';

        $this->testUsage();
        $this->testString();
        $this->testCanChangeActualState();
        $this->testActual();
    }
}
/**
 * 总体来说， 备忘录模式还是非常容易理解常用的地方的
 */