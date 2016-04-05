<?php
/**
 * Date: 2016/4/5
 */

namespace DesignPatterns\Behavioral\Specification;

interface SpecificationInterface
{
    /**
     * 判断是否满足规格
     *
     * @param Item $item
     * @return mixed
     */
    public function isSatisfiedBy(Item $item);

    /**
     * 创建一个逻辑与规格
     *
     * @param SpecificationInterface $spec
     * @return mixed
     */
    public function plus(SpecificationInterface $spec);

    /**
     * 创建一个逻辑或规格
     *
     * @param SpecificationInterface $spec
     * @return mixed
     */
    public function either(SpecificationInterface $spec);

    /**
     * 创建一个逻辑非
     *
     * @return mixed
     */
    public function not();
}