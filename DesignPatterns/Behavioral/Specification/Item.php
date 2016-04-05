<?php
/**
 * Date: 2016/4/5
 */

namespace DesignPatterns\Behavioral\Specification;

class Item
{
    protected $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}