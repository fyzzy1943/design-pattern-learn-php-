<?php
/**
 * Date: 2016/3/27
 */

namespace DesignPatterns\Structural\Proxy;

class RecordProxy extends Record
{
    /**
     * @var bool
     */
    protected $isDirty = false;

    /**
     * @var bool
     */
    protected $isInitialized = false;

    public function __construct($data)
    {
        parent::__construct($data);

        // 如果有数据， 就标记初始化为true
        // 原始类将保留逻辑， 我们不希望在那扩充行为， 所以我们将使用一个代理类来扩展原始类
        if (null !== $data) {
            $this->isDirty = true;
            $this->isInitialized = true;
        }
    }

    public function __set($name, $value)
    {
        $this->isDirty = true;
        parent::__set($name, $value);
    }
}