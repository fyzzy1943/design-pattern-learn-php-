<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/7
 * Time: 16:40
 */

namespace DesignPatterns\Creational\AbstractFactory;


abstract class Picture implements MediaInterface
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $name;

    /**
     * Picture constructor.
     *
     * @param string $path
     * @param string $name
     */
    public function __construct($path, $name = '')
    {
        $this->name = (string)$name;
        $this->path = (string)$path;
    }
}