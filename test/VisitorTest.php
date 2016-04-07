<?php
/**
 * Date: 2016/4/7
 */

namespace Test;

use DesignPatterns\Behavioral\Visitor\Role;
use DesignPatterns\Behavioral\Visitor\RolePrintVisitor;
use DesignPatterns\Behavioral\Visitor\User;
use DesignPatterns\Behavioral\Visitor\Group;

class VisitorTest
{
    protected $visitor;

    protected function setUp()
    {
        $this->visitor = new RolePrintVisitor();
    }

    public function getRole()
    {
        return array(
            new User('Dominik'),
            new Group('Administrators'),
        );
    }

    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
    }
    public function test()
    {
        echo '<div>Visitor Test</div>';

        $this->setUp();
        foreach ($this->getRole() as $role) {
            $this->testVisitSomeRole($role);
        }
    }
}