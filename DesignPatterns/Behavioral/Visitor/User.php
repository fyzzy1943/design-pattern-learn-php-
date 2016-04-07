<?php
/**
 * Date: 2016/4/7
 */

namespace DesignPatterns\Behavioral\Visitor;

class User extends Role
{
    /**
     * @var string
     */
    protected $name;

    public function __construct($name)
    {
        $this->name = (string)$name;
    }

    public function getName()
    {
        return 'User ' . $this->name;
    }
}