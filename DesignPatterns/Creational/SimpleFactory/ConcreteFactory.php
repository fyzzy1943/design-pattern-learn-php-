<?php
/**
 * Date: 2016/3/14
 */

namespace DesignPatterns\Creational\SimpleFactory;

class ConcreteFactory
{
    /**
     * @var array
     */
    protected $typeList;

    /**
     * ConcreteFactory constructor.
     * 注入车子类型
     */
    public function __construct()
    {
        $this->typeList = array(
            'bicycle' => __NAMESPACE__ . '\Bicycle',
            'other' => __NAMESPACE__ . '\Scooter',
        );
    }

    public function createVehicle($type)
    {
        if (!array_key_exists($type, $this->typeList)) {
            throw new \InvalidArgumentException("$type is not valid");
        }

        $className = $this->typeList[$type];

        return new $className;
    }
}