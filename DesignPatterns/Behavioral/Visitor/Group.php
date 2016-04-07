<?php
/**
 * Date: 2016/4/7
 */

namespace DesignPatterns\Behavioral\Visitor;

class Group extends Role
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
        return 'Group: ' . $this->name;
    }
}