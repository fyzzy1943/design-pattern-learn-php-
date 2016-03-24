<?php
/**
 * Date: 2016/3/23
 */

namespace DesignPatterns\Structural\DependencyInjection;

abstract class AbstractConfig
{
    /**
     * @var Storage of data
     */
    protected $storage;

    public function __construct($storage)
    {
        $this->storage = $storage;
    }
}