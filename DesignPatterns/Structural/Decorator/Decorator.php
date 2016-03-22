<?php
/**
 * Date: 2016/3/22
 */

namespace DesignPatterns\Structural\Decorator;

abstract class Decorator implements RendererInterface
{
    protected $wrapped;

    /**
     * Decorator constructor.
     * 类型声明装饰组件，以便于在子类中调用renderData()方法
     *
     * @param RendererInterface $wrappable
     */
    public function __construct(RendererInterface $wrappable)
    {
        $this->wrapped = $wrappable;
    }
}