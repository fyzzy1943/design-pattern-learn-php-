<?php
/**
 * Date: 2016/3/31
 */

namespace DesignPatterns\Behavioral\Mediator;


/**
 * Class Colleague
 * 抽象同事类
 *
 * @package DesignPatterns\Behavioral\Mediator
 */
abstract class Colleague
{
    /**
     * @var MediatorInterface
     */
    private $mediator;

    /**
     * Colleague constructor.
     * @param MediatorInterface $medium
     */
    public function __construct(MediatorInterface $medium)
    {
        $this->mediator = $medium;
    }

    protected function getMediator()
    {
        return $this->mediator;
    }
}