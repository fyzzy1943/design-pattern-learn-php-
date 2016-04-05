<?php
/**
 * Date: 2016/4/5
 */

namespace DesignPatterns\Behavioral\Specification;

abstract class AbstractSpecification implements SpecificationInterface
{
    /**
     * 检查给定的Item是否满足所有规格
     *
     * @param Item $item
     * @return mixed
     */
    abstract public function isSatisfiedBy(Item $item);

    /**
     * 创建一个新的逻辑与规格
     *
     * @param SpecificationInterface $spec
     */
    public function plus(SpecificationInterface $spec)
    {
        return new Plus($this, $spec);
    }

    /**
     * 创建一个新的逻辑或规格
     *
     * @param SpecificationInterface $spec
     */
    public function either(SpecificationInterface $spec)
    {
        return new Either($this, $spec);
    }

    /**
     * 创建一个新的逻辑非规格
     */
    public function not()
    {
        return new Not($this);
    }
}