<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\Strategy;

class DateComparator implements ComparatorInterface
{
    public function compare($a, $b)
    {
        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);

        if ($aDate == $bDate) {
            return 0;
        } else {
            return $aDate < $bDate ? -1 : 1;
        }
    }
}