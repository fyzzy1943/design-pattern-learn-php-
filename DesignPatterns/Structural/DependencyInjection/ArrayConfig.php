<?php
/**
 * Date: 2016/3/23
 */

namespace DesignPatterns\Structural\DependencyInjection;

class ArrayConfig extends AbstractConfig implements Parameters
{
    public function get($key, $default = null)
    {
        if (isset($this->storage[$key])) {
            return $this->storage[$key];
        }

        return $default;
    }

    public function set($key, $value)
    {
        $this->storage[$key] = $value;
    }
}