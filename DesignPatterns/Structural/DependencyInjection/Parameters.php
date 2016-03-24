<?php
/**
 * Date: 2016/3/23
 */

namespace DesignPatterns\Structural\DependencyInjection;

interface Parameters
{
    /**
     * 获取参数
     *
     * @param string|int $key
     * @return mixed
     */
    public function get($key);

    /**
     * 设置参数
     *
     * @param string|int $key
     * @param mixed $value
     * @return mixed
     */
    public function set($key, $value);
}