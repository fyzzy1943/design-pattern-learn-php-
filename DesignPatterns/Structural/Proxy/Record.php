<?php
/**
 * Date: 2016/3/27
 */

namespace DesignPatterns\Structural\Proxy;

class Record
{
    /**
     * @var array|null
     */
    protected $data;

    /**
     * @param null $data
     */
    public function __construct($data = null)
    {
        $this->data = (array)$data;
    }

    public function __set($name, $value)
    {
        $this->data[(string)$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            return null;
        }
    }
}