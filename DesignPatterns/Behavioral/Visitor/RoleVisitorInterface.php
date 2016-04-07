<?php
/**
 * Date: 2016/4/7
 */

namespace DesignPatterns\Behavioral\Visitor;

interface RoleVisitorInterface
{
    /**
     * 访问User对象
     *
     * @param User $role
     * @return mixed
     */
    public function visitUser(User $role);

    /**
     * 访问Group对象
     *
     * @param Group $role
     * @return mixed
     */
    public function visitGroup(Group $role);
}