<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\State;

interface OrderInterface
{
    /**
     * @return mixed
     */
    public function shipOrder();

    /**
     * @return mixed
     */
    public function completeOrder();
}