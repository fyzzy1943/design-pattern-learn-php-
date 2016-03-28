<?php
/**
 * Date: 2016/3/28
 */

namespace DesignPatterns\Structural\Registry;

abstract class Registry
{
    const LOGGER = 'logger';

    /**
     * @var array
     */
    protected static $storedValues = array();

    /**
     * @param $key
     * @param $value
     */
    public static function set($key, $value)
    {
        self::$storedValues[$key] = $value;
    }

    /**
     * @param $key
     */
    public static function get($key)
    {
        return self::$storedValues[$key];
    }
}