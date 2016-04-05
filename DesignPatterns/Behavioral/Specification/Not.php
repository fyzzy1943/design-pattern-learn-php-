<?php
/**
 * Date: 2016/4/5
 */

namespace DesignPatterns\Behavioral\Specification;

class Not extends AbstractSpecification
{
    protected $spec;

    public function __construct(SpecificationInterface $spec)
    {
        $this->spec = $spec;
    }

    /**
     * 返回规格的相反结果
     *
     * @param Item $item
     * @return bool
     */
    public function isSatisfiedBy(Item $item)
    {
        return !$this->spec->isSatisfiedBy($item);
    }
}