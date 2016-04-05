<?php
/**
 * Date: 2016/4/5
 */

namespace Test;

use DesignPatterns\Behavioral\Specification\Item;
use DesignPatterns\Behavioral\Specification\PriceSpecification;

class SpecificationTest
{
    public function testSimple()
    {
        $item = new Item(100);
        $spec = new PriceSpecification();
        var_dump('Simple', $spec->isSatisfiedBy($item));

        $spec->setMaxPrice(150);
        $spec->setMinPrice(100);
        var_dump($spec->isSatisfiedBy($item));

        $spec->setMinPrice(120);
        var_dump($spec->isSatisfiedBy($item));
    }

    public function testPlus()
    {
        $spec1 = new PriceSpecification();
        $spec2 = new PriceSpecification();
        $plus = $spec1->plus($spec2);

        $item = new Item(100);

        $spec1->setMaxPrice(120);
        $spec1->setMinPrice(80);
        $spec2->setMaxPrice(140);
        $spec2->setMinPrice(90);
        var_dump('Plus', $plus->isSatisfiedBy($item));

        $spec1->setMaxPrice(90);
        var_dump($plus->isSatisfiedBy($item));
    }

    // testEither();

    // testNot();

    public function test()
    {
        echo '<div>Specification Test</div>';

        $this->testSimple();
        $this->testPlus();
    }
}
/**
 * 这个模式有点难以理解作用。。
 */