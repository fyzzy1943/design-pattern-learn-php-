<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\State;

class CreateOrder implements OrderInterface
{
    private $order;

    public function __construct(array $order)
    {
        if (empty($order)) {
            throw new \Exception('Order can not be empty!');
        }
        $this->order = $order;
    }

    public function shipOrder()
    {
        $this->order['status'] = 'shipping';
        $this->order['updatedTime'] = time();

        var_dump($this->order);

//        return $this->updateOrder($this->order);
    }

    public function completeOrder()
    {
        throw new \Exception('Can not complete the order which status is created');
    }
}