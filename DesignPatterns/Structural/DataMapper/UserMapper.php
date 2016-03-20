<?php
/**
 * Date: 2016/3/20
 */

namespace DesignPatterns\Structural\DataMapper;

class UserMapper
{
    /**
     * @var DBAL
     */
    protected $adapter;

    public function __construct(DBAL)
    {
    }
}