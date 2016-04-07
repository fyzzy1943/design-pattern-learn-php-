<?php
/**
 * Date: 2016/4/7
 */

namespace Test;

use DesignPatterns\More\Delegation\JuniorDeveloper;
use DesignPatterns\More\Delegation\TeamLead;

class Delegation
{
    public function test()
    {
        echo '<div>Delegation Test</div>';

        $teamLead = new TeamLead(new JuniorDeveloper());
        $teamLead->writeCode();
    }
}
/**
 * 这模式看起来如此诡异
 */