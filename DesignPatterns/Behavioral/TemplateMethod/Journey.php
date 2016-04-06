<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class Journey
{
    /**
     * 该方法是父类和子类提供的公共服务
     */
    final public function takeATrip()
    {
        $this->buyAFlight();
        $this->takePlane();
        $this->enjoyVacation();
        $this->buyGift();
        $this->takePlane();
    }

    /**
     * 该方法必须被子类实现
     */
    abstract protected function enjoyVacation();

    /**
     * 该方法是可选的，只有在需要的时候才去重写它
     */
    protected function buyGift()
    {

    }

    /**
     * 子类不能访问该方法
     */
    private function buyAFlight()
    {
        echo 'buy a flight', PHP_EOL;
    }

    final protected function takePlane()
    {
        echo 'taking the plane', PHP_EOL;
    }
}