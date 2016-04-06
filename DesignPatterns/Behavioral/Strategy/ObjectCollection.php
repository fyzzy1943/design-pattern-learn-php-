<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\Strategy;

class ObjectCollection
{
    /**
     * @var array
     */
    private $elements;

    /**
     * @var ComparatorInterface
     */
    private $comparator;

    public function __construct(array $elements = array())
    {
        $this->elements = $elements;
    }

    public function sort()
    {
        if (!$this->comparator) {
            throw new \LogicException('Comparator is not set');
        }

        $callback = array($this->comparator, 'compare');
        uasort($this->elements, $callback);

        return $this->elements;
    }

    public function setComparator(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }
}