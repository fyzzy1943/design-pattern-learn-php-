<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\Strategy;

interface ComparatorInterface
{
    /**
     * @param $a
     * @param $b
     * @return bool
     */
    public function compare($a, $b);
}