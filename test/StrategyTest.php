<?php
/**
 * Date: 2016/4/6
 */

namespace Test;

use DesignPatterns\Behavioral\Strategy\DateComparator;
use DesignPatterns\Behavioral\Strategy\IdComparator;
use DesignPatterns\Behavioral\Strategy\ObjectCollection;

class StrategyTest
{
    public function getCollection()
    {
        return array(
            array('id'=>2,'date'=>'2014-03-03',),
            array('id'=>1,'date'=>'2014-03-01',),
            array('id'=>3,'date'=>'2014-03-02',),
            array('id'=>5,'date'=>'2014-02-02',),
            array('id'=>4,'date'=>'2014-02-01',),
        );
    }

    public function testIdComparator($collection)
    {
        $obj = new ObjectCollection($collection);
        $obj->setComparator(new IdComparator());
        $elements = $obj->sort();

        var_dump($elements);
    }

    public function testDateComparator($collection)
    {
        $obj = new ObjectCollection($collection);
        $obj->setComparator(new DateComparator());
        $elements = $obj->sort();

        var_dump($elements);
    }

    public function test()
    {
        echo '<div>StaticFactory Test</div>';

        $collection = $this->getCollection();
        var_dump($collection);

        $this->testIdComparator($collection);
        $this->testDateComparator($collection);
    }
}
/**
 * 设计模式体现在php上已经和以前都不太一样了
 */