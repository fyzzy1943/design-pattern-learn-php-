<?php
/**
 * Date: 2016/4/7
 */

namespace DesignPatterns\More\Delegation;

class TeamLead
{
    protected $slave;

    public function __construct(JuniorDeveloper $junior)
    {
        $this->slave = $junior;
    }

    public function writeCode()
    {
        return $this->slave->writeBadCode();
    }
}