<?php

namespace DesignPatterns\Creational\Multiton;

class Multiton
{
    /**
     * 第一个实例
     */
    const INSTANCE_1 = '1';

    /**
     * 第二个实例
     */
    const INSTANCE_2 = '2';

    /**
     * 实例数组
     * @var array
     */
    private static $instances = array();

    /**
     * 禁止外部实例化
     * Multiton constructor.
     */
    private function __construct()
    {
    }

    /**
     * 通过名称返回实例
     *
     * @param string $instanceName
     * @return Multiton
     */
    public static function getInstance($instanceName)
    {
        if (!array_key_exists($instanceName, self::$instances)) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    /**
     * 防止外部克隆
     */
    private function __clone()
    {
    }

    /**
     * 防止外部反序列化
     */
    private function __wakeup()
    {
    }
}