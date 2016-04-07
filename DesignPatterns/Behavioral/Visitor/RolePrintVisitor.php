<?php
/**
 * Date: 2016/4/7
 */

namespace DesignPatterns\Behavioral\Visitor;

class RolePrintVisitor implements RoleVisitorInterface
{
    public function visitGroup(Group $role)
    {
        echo 'Role: ' . $role->getName(), PHP_EOL;
    }

    public function visitUser(User $role)
    {
        echo 'Role: ' . $role->getName(), PHP_EOL;
    }
}