<?php
/**
 * Date: 2016/4/1
 */

namespace DesignPatterns\Behavioral\Observer;

class UserObserver implements \SplObserver
{
    /**
     * 观察者需要实现的唯一方法
     *
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        echo get_class($subject) . ' has been updated';
    }
}