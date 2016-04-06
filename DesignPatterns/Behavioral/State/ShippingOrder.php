<?php
/**
 * Date: 2016/4/6
 */

namespace DesignPatterns\Behavioral\State;

class ShippingOrder implements OrderInterface
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
        throw new \Exception('Can not ship the order which status is shipping!');
    }

    public function completeOrder()
    {
        $this->order['status'] = 'completed';
        $this->order['updatedTime'] = time();

        var_dump($this->order);

//        return $this->updateOrder($this->order);
    }
}