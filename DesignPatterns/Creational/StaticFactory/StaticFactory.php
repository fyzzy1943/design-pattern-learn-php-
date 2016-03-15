<?php
/**
 * Date: 2016/3/15
 */

namespace DesignPatterns\Creational\StaticFactory;

class StaticFactory
{
    public static function factory($type)
    {
        $className = __NAMESPACE__ . '\Format' . ucfirst($type);

        if (!class_exists($className)) {
            throw new \InvalidArgumentException("$className is not valid");
        }

        return new $className;
    }
}