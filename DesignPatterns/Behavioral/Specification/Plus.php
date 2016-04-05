<?php
/**
 * Date: 2016/4/5
 */

namespace DesignPatterns\Behavioral\Specification;

class Plus extends AbstractSpecification
{
    protected $left;
    protected $right;

    public function __construct(SpecificationInterface $left, SpecificationInterface $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    /**
     * 返回两种规格的逻辑与评估
     *
     * @param Item $item
     * @return bool
     */
    public function isSatisfiedBy(Item $item)
    {
        return $this->left->isSatisfiedBy($item)  && $this->right->isSatisfiedBy($item);
    }
}