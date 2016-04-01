<?php
/**
 * Date: 2016/4/1
 */

namespace DesignPatterns\Behavioral\Observer;

/**
 * Class User 被观察对象
 * @package DesignPatterns\Behavioral\Observer
 */
class User implements \SplSubject
{
    /**
     * user data
     *
     * @var array
     */
    protected $data = array();

    /**
     * observers
     *
     * @var \SplObjectStorage
     */
    protected $observer;

    public function __construct()
    {
        $this->observer = new \SplObjectStorage();
    }

    /**
     * 附加观察者
     *
     * @param \SplObserver $observer
     */
    public function attach(\SplObserver $observer)
    {
        $this->observer->attach($observer);
    }

    /**
     * 取消观察者
     *
     * @param \SplObserver $observer
     */
    public function detach(\SplObserver $observer)
    {
        $this->observer->detach($observer);
    }

    /**
     * 通知观察者
     */
    public function notify()
    {
        foreach ($this->observer as $observer) {
            $observer->update($this);
        }
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;

        $this->notify();
    }
}