<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\Strategy;

class IdComparator implements ComparatorInterface
{
    public function compare($a, $b)
    {
        if ($a['id'] == $b['id']) {
            return 0;
        } else {
            return $a['id'] < $b['id'] ? -1 : 1;
        }
    }
}